<?php

namespace App\Repository;

use App\Entity\MasterType;
use App\Modules\Syncer\Model\SyncObjectMasterType;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Persistence\ManagerRegistry;

/**
 * @extends ServiceEntityRepository<MasterType>
 *
 * @method MasterType|null find($id, $lockMode = null, $lockVersion = null)
 * @method MasterType|null findOneBy(array $criteria, array $orderBy = null)
 * @method MasterType[]    findAll()
 * @method MasterType[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class MasterTypeRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, MasterType::class);
    }

    public function save(MasterType $entity, bool $flush = false): void
    {
        $this->getEntityManager()->persist($entity);

        if ($flush) {
            $this->getEntityManager()->flush();
        }
    }

    public function remove(MasterType $entity, bool $flush = false): void
    {
        $this->getEntityManager()->remove($entity);

        if ($flush) {
            $this->getEntityManager()->flush();
        }
    }

    public function getObjectsForSync (\DateTimeImmutable $lastSyncDate): array {
        $dbObjects = $this->createQueryBuilder('object')
            ->where('object.syncDate > :value')
            ->setParameter('value', $lastSyncDate)
            ->orderBy('object.objID', 'ASC')
            ->getQuery()
            ->getResult()
            ;
        return (array_map(fn(MasterType $object) => new SyncObjectMasterType(
            $object->getSyncDate()->getTimestamp(),
            $object->getObjID(),
            $object->getMasterTypeDescription(),
            $object->getName()
        ),$dbObjects));
    }

}
