<?php

namespace App\Repository;

use App\Entity\Garant;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Symfony\Bridge\Doctrine\RegistryInterface;

/**
 * @method Garant|null find($id, $lockMode = null, $lockVersion = null)
 * @method Garant|null findOneBy(array $criteria, array $orderBy = null)
 * @method Garant[]    findAll()
 * @method Garant[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class GarantRepository extends ServiceEntityRepository
{
    public function __construct(RegistryInterface $registry)
    {
        parent::__construct($registry, Garant::class);
    }

    // /**
    //  * @return Garant[] Returns an array of Garant objects
    //  */
    /*
    public function findByExampleField($value)
    {
        return $this->createQueryBuilder('g')
            ->andWhere('g.exampleField = :val')
            ->setParameter('val', $value)
            ->orderBy('g.id', 'ASC')
            ->setMaxResults(10)
            ->getQuery()
            ->getResult()
        ;
    }
    */

    /*
    public function findOneBySomeField($value): ?Garant
    {
        return $this->createQueryBuilder('g')
            ->andWhere('g.exampleField = :val')
            ->setParameter('val', $value)
            ->getQuery()
            ->getOneOrNullResult()
        ;
    }
    */
}
