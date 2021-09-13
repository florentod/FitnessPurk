<?php

namespace App\Repository;

use App\Entity\ContratAbonnement;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Persistence\ManagerRegistry;

/**
 * @method ContratAbonnement|null find($id, $lockMode = null, $lockVersion = null)
 * @method ContratAbonnement|null findOneBy(array $criteria, array $orderBy = null)
 * @method ContratAbonnement[]    findAll()
 * @method ContratAbonnement[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class ContratAbonnementRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, ContratAbonnement::class);
    }

    // /**
    //  * @return ContratAbonnement[] Returns an array of ContratAbonnement objects
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
    public function findOneBySomeField($value): ?ContratAbonnement
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
