<?php

namespace App\Repository;

use App\Entity\SousQuestion;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Symfony\Bridge\Doctrine\RegistryInterface;

/**
 * @method SousQuestion|null find($id, $lockMode = null, $lockVersion = null)
 * @method SousQuestion|null findOneBy(array $criteria, array $orderBy = null)
 * @method SousQuestion[]    findAll()
 * @method SousQuestion[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class SousQuestionRepository extends ServiceEntityRepository
{
    public function __construct(RegistryInterface $registry)
    {
        parent::__construct($registry, SousQuestion::class);
    }

    // /**
    //  * @return SousQuestion[] Returns an array of SousQuestion objects
    //  */
    /*
    public function findByExampleField($value)
    {
        return $this->createQueryBuilder('s')
            ->andWhere('s.exampleField = :val')
            ->setParameter('val', $value)
            ->orderBy('s.id', 'ASC')
            ->setMaxResults(10)
            ->getQuery()
            ->getResult()
        ;
    }
    */

    /*
    public function findOneBySomeField($value): ?SousQuestion
    {
        return $this->createQueryBuilder('s')
            ->andWhere('s.exampleField = :val')
            ->setParameter('val', $value)
            ->getQuery()
            ->getOneOrNullResult()
        ;
    }
    */
}
