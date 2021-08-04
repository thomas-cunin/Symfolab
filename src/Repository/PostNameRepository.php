<?php

namespace App\Repository;

use App\Entity\PostName;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Persistence\ManagerRegistry;

/**
 * @method PostName|null find($id, $lockMode = null, $lockVersion = null)
 * @method PostName|null findOneBy(array $criteria, array $orderBy = null)
 * @method PostName[]    findAll()
 * @method PostName[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class PostNameRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, PostName::class);
    }

    // /**
    //  * @return PostName[] Returns an array of PostName objects
    //  */
    /*
    public function findByExampleField($value)
    {
        return $this->createQueryBuilder('p')
            ->andWhere('p.exampleField = :val')
            ->setParameter('val', $value)
            ->orderBy('p.id', 'ASC')
            ->setMaxResults(10)
            ->getQuery()
            ->getResult()
        ;
    }
    */

    /*
    public function findOneBySomeField($value): ?PostName
    {
        return $this->createQueryBuilder('p')
            ->andWhere('p.exampleField = :val')
            ->setParameter('val', $value)
            ->getQuery()
            ->getOneOrNullResult()
        ;
    }
    */
}
