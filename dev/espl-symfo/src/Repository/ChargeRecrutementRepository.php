<?php

namespace App\Repository;

use App\Entity\ChargeRecrutement;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Symfony\Bridge\Doctrine\RegistryInterface;

/**
 * @method ChargeRecrutement|null find($id, $lockMode = null, $lockVersion = null)
 * @method ChargeRecrutement|null findOneBy(array $criteria, array $orderBy = null)
 * @method ChargeRecrutement[]    findAll()
 * @method ChargeRecrutement[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class ChargeRecrutementRepository extends ServiceEntityRepository
{
    public function __construct(RegistryInterface $registry)
    {
        parent::__construct($registry, ChargeRecrutement::class);
    }

    // /**
    //  * @return ChargeRecrutement[] Returns an array of ChargeRecrutement objects
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
    public function findOneBySomeField($value): ?ChargeRecrutement
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
