<?php

namespace App\Repository;

use App\Entity\User;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\ORM\Query\ResultSetMapping;
use Doctrine\Persistence\ManagerRegistry;
use Symfony\Component\Security\Core\Exception\UnsupportedUserException;
use Symfony\Component\Security\Core\User\PasswordAuthenticatedUserInterface;
use Symfony\Component\Security\Core\User\PasswordUpgraderInterface;

/**
 * @method User|null find($id, $lockMode = null, $lockVersion = null)
 * @method User|null findOneBy(array $criteria, array $orderBy = null)
 * @method User[]    findAll()
 * @method User[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class UserRepository extends ServiceEntityRepository implements PasswordUpgraderInterface
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, User::class);
    }

    /**
     * Used to upgrade (rehash) the user's password automatically over time.
     */
    public function upgradePassword(PasswordAuthenticatedUserInterface $user, string $newHashedPassword): void
    {
        if (!$user instanceof User) {
            throw new UnsupportedUserException(sprintf('Instances of "%s" are not supported.', \get_class($user)));
        }

        $user->setPassword($newHashedPassword);
        $this->_em->persist($user);
        $this->_em->flush();
    }

    /**
     * @param User $user
     * @return void
     */
    public function updateUser (User $user): void
    {
       $this->_em->persist($user);
       $this->_em->flush();

    }

    public function remove (User $entity, bool $flush = true) {
        $this->getEntityManager()->remove($entity);
        if ($flush) {
            $this->getEntityManager()->flush();
        }
    }

    /**
     * @param array $topCommentedIDs
     * @param int $limit
     * @return array
     */
    public function getMastersAccountsWithFeedbacksNumbers(array $topCommentedIDs,int $limit = 7): array {
        //$sql = "select COUNT(obj_id) as feedbacks_count, linked_obj_id from public.comment where type = 'feedback' group by linked_obj_id order by feedbacks_count desc LIMIT ".$limit;
        //$topCommentedIDs = $this->getFeedbacksNumbersForUsers($limit);
        //dump ($topCommentedIDs);
        $commentedIDs = [];//array_map(fn (array $commentedID) => intval ($commentedID['userID']),$topCommentedIDs);
        foreach ($topCommentedIDs as $commentedID) {
            $commentedIDs[intval($commentedID['userID'])] = $commentedID['feedbacksCount'];
        }
        //dump ($commentedIDs);
        $expr = $this->_em->getExpressionBuilder();
        $users = $this->createQueryBuilder('user')
            ->where($expr->in('user.id', ':topCommentedIDs'))
            //->andWhere('user.isMaster = TRUE')
            //->setParameter('topCommentedIDs', array_map(fn (array $commentedID) => intval ($commentedID['userID']), $topCommentedIDs))
            ->setParameter('topCommentedIDs', array_keys($commentedIDs))
            ->orderBy('user.id', 'ASC')
            ->getQuery()
            ->getResult();
        $usersIndexed = [];
        foreach ($users as $user) {
            $usersIndexed[$user->getID()] = $user;
        }

        /*if (\count($topCommented) < $limit) {
            $firstMasters = $this->createQueryBuilder('user')
                ->where('user.phone is not null')
                ->andWhere('user.isMaster = TRUE')
                ->andWhere($expr->notIn('user.id', ':topCommentedIDs'))
                ->setParameter('topCommentedIDs', array_keys($commentedIDs))
                ->orderBy('user.id', 'ASC')
                ->getQuery()
                ->getResult();
        }*/
        //$users = array_merge($topCommented, (isset($firstMasters) ? array_slice($firstMasters,0,$limit-count($topCommented)) : []));

        return array_map(fn (array $commentedID) => array('user' => $usersIndexed[$commentedID['userID']], 'feedbacksNumber' => $commentedIDs[$commentedID['userID']] ?? 0), $topCommentedIDs);
    }
}
