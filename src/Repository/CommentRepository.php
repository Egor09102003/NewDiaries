<?php

namespace App\Repository;

use App\Entity\Comment;
use App\Modules\Syncer\Model\SyncObjectComment;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\DBAL\Connection;
use Doctrine\ORM\OptimisticLockException;
use Doctrine\ORM\ORMException;
use Doctrine\ORM\Query\ResultSetMapping;
use Doctrine\Persistence\ManagerRegistry;

/**
 * @extends ServiceEntityRepository<Comment>
 *
 * @method Comment|null find($id, $lockMode = null, $lockVersion = null)
 * @method Comment|null findOneBy(array $criteria, array $orderBy = null)
 * @method Comment[]    findAll()
 * @method Comment[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class CommentRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, Comment::class);
    }

    /**
     */
    public function add(Comment $entity, bool $flush = true): void
    {
        $this->_em->persist($entity);
        if ($flush) {
            $this->_em->flush();
        }
    }

    /**
     * @throws ORMException
     * @throws OptimisticLockException
     */
    public function remove(Comment $entity, bool $flush = true): void
    {
        $this->_em->remove($entity);
        if ($flush) {
            $this->_em->flush();
        }
    }

    public function save (Comment $comment): void
    {
        $this->getEntityManager()->persist($comment);
        //$this->_em->flush();
    }

    public function getObjectsForSync (\DateTimeImmutable $lastSyncDate, array $linkedObjIDs): array {
        $expr = $this->_em->getExpressionBuilder();
        $dbObjects = $this->createQueryBuilder('object')
            ->where($expr->in('object.linkedObjID', $linkedObjIDs))
            ->andWhere('object.syncDate > :value')
            ->setParameter('value', $lastSyncDate)
            ->orderBy('object.objID', 'ASC')
            ->getQuery()
            ->getResult()
        ;
        return (array_map(fn(Comment $object) => new SyncObjectComment(
            $object->getSyncDate()->getTimestamp(),
            $object->getObjId(),
            $object->getLinkedObjID(),
            $object->getType(),
            $object->getOwner() ? $object->getOwner()->getId() : null,
            $object->getImages(),
            $object->getTags(),
            $object->getDate()->getTimestamp(),
            $object->getContent(),
            $object->getRate()
        ), $dbObjects));
    }

    public function removeByID(string $objID): void
    {

        $this->createQueryBuilder('comment')
            ->delete(Comment::class,'comment')
            ->where('comment.objID = :objID')
            ->setParameter('objID',$objID)
            ->getQuery()
            ->execute();
    }

    public function clearComments (int $userID): void
    {
        $this->createQueryBuilder('comment')
            ->delete('App:Comment','comment')
            ->where('comment.owner = :userID')
            ->setParameter('userID', $userID)
            ->getQuery()
            ->execute();
    }

    public function getReviewsNumberForObject (string $linkedObjID): int {
        $expr = $this->_em->getExpressionBuilder();
        $reviewsNumber = $this->createQueryBuilder('comment')
            ->select($expr->count('comment.objID'))
            ->where('comment.linkedObjID = :linkedObjID')
            ->andWhere('comment.type = :type')
            ->setParameter('linkedObjID', $linkedObjID)
            ->setParameter('type', 'review')
            ->getQuery()
            ->getResult()
        ;
        //dump ($reviewsNumber[0][1]);
        return $reviewsNumber[0][1] ?? 0;
    }

    /**
     * @param string[] $linkedObjIDs
     * @return Comment[]
     */
    public function getReviewsForObjects(array $linkedObjIDs): array {
        $expr = $this->_em->getExpressionBuilder();
        return $this->createQueryBuilder('comment')
            ->where($expr->in('comment.linkedObjID', $linkedObjIDs))
            ->andWhere('comment.type = :type')
            ->setParameter('type', 'review')
            ->getQuery()
            ->getResult()
            ;
    }

    /**
     * @param string[] $linkedObjIDs
     * @return Comment[]
     */
    public function getObjectsComments (array $linkedObjIDs): array{
        $expr = $this->_em->getExpressionBuilder();
        return $this->createQueryBuilder('object')
            ->where($expr->in('object.linkedObjID', $linkedObjIDs))
            ->orderBy('object.objID', 'ASC')
            ->getQuery()
            ->getResult()
        ;
    }

    public function getFeedbacksNumbers(string $userID): array {
        $sql = "select COUNT(obj_id) as feedbacks_count, u.is_master from public.comment c left join public.user u on u.id = c.owner_id where c.type = 'feedback' and c.linked_obj_id = :userID group by u.is_master";
        $resultSet = new ResultSetMapping();
        $resultSet->addScalarResult('feedbacks_count', 'feedbacksCount');
        $resultSet->addScalarResult('is_master', 'isMaster');
        $qb = $this->_em->createNativeQuery($sql,$resultSet);
        $qb->setParameter('userID',$userID);
        $result = $qb->getResult();
        $arrayToReturn = [];
        foreach ($result as $feedbacksNumber) {
            if ($feedbacksNumber['isMaster']) {
                $arrayToReturn['masters'] = $feedbacksNumber['feedbacksCount'];
            } else {
                $arrayToReturn['users'] = $feedbacksNumber['feedbacksCount'];
            }
        }
        return $arrayToReturn;
    }
    public function getFeedbacksNumbersForUsers(bool $isMasters = false, ?int $limit = null): array {
        $sql = "select u.id as user_id, count(c.obj_id) as feedbacks_count from public.user u left join comment c on u.id::varchar = c.linked_obj_id and c.type = 'feedback'".($isMasters ? " where is_master = TRUE" : "")." group by c.linked_obj_id, u.id order by feedbacks_count desc, u.id".(empty($limit) ? '' : " LIMIT ".$limit);
        $resultSet = new ResultSetMapping();
        $resultSet->addScalarResult('feedbacks_count', 'feedbacksCount');
        $resultSet->addScalarResult('user_id', 'userID');
        $qb = $this->_em->createNativeQuery($sql,$resultSet);
        return $qb->getResult();
    }
}
