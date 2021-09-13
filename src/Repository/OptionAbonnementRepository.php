<?php

namespace App\Repository;

use App\Entity\OptionAbonnement;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Persistence\ManagerRegistry;

/**
 * @method OptionAbonnement|null find($id, $lockMode = null, $lockVersion = null)
 * @method OptionAbonnement|null findOneBy(array $criteria, array $orderBy = null)
 * @method OptionAbonnement[]    findAll()
 * @method OptionAbonnement[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class OptionAbonnementRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, OptionAbonnement::class);
    }

    // /**
    //  * @return OptionAbonnement[] Returns an array of OptionAbonnement objects
    //  */
    /*
    public function findByExampleField($value)
    {
        return $this->createQueryBuilder('o')
            ->andWhere('o.exampleField = :val')
            ->setParameter('val', $value)
            ->orderBy('o.id', 'ASC')
            ->setMaxResults(10)
            ->getQuery()
            ->getResult()
        ;
    }
    */

    /*
    public function findOneBySomeField($value): ?OptionAbonnement
    {
        return $this->createQueryBuilder('o')
            ->andWhere('o.exampleField = :val')
            ->setParameter('val', $value)
            ->getQuery()
            ->getOneOrNullResult()
        ;
    }
    */
}
