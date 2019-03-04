<?php

namespace App\Repository;

use App\Entity\ReponseSpecifique;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Symfony\Bridge\Doctrine\RegistryInterface;

/**
 * @method ReponseSpecifique|null find($id, $lockMode = null, $lockVersion = null)
 * @method ReponseSpecifique|null findOneBy(array $criteria, array $orderBy = null)
 * @method ReponseSpecifique[]    findAll()
 * @method ReponseSpecifique[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class ReponseSpecifiqueRepository extends ServiceEntityRepository
{
    public function __construct(RegistryInterface $registry)
    {
        parent::__construct($registry, ReponseSpecifique::class);
    }

    // /**
    //  * @return ReponseSpecifique[] Returns an array of ReponseSpecifique objects
    //  */
    /*
    public function findByExampleField($value)
    {
        return $this->createQueryBuilder('r')
            ->andWhere('r.exampleField = :val')
            ->setParameter('val', $value)
            ->orderBy('r.id', 'ASC')
            ->setMaxResults(10)
            ->getQuery()
            ->getResult()
        ;
    }
    */

    /*
    public function findOneBySomeField($value): ?ReponseSpecifique
    {
        return $this->createQueryBuilder('r')
            ->andWhere('r.exampleField = :val')
            ->setParameter('val', $value)
            ->getQuery()
            ->getOneOrNullResult()
        ;
    }
    */
}
