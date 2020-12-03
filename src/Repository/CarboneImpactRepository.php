<?php

namespace App\Repository;

use App\Entity\CarboneImpact;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Persistence\ManagerRegistry;

/**
 * @method CarboneImpact|null find($id, $lockMode = null, $lockVersion = null)
 * @method CarboneImpact|null findOneBy(array $criteria, array $orderBy = null)
 * @method CarboneImpact[]    findAll()
 * @method CarboneImpact[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class CarboneImpactRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, CarboneImpact::class);
    }

    // /**
    //  * @return CarboneImpact[] Returns an array of CarboneImpact objects
    //  */
    /*
    public function findByExampleField($value)
    {
        return $this->createQueryBuilder('c')
            ->andWhere('c.exampleField = :val')
            ->setParameter('val', $value)
            ->orderBy('c.id', 'ASC')
            ->setMaxResults(10)
            ->getQuery()
            ->getResult()
        ;
    }
    */

    /*
    public function findOneBySomeField($value): ?CarboneImpact
    {
        return $this->createQueryBuilder('c')
            ->andWhere('c.exampleField = :val')
            ->setParameter('val', $value)
            ->getQuery()
            ->getOneOrNullResult()
        ;
    }
    */
}
