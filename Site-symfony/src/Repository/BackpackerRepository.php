<?php

namespace App\Repository;

use App\Entity\Backpacker;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Symfony\Bridge\Doctrine\RegistryInterface;

/**
 * @method Backpacker|null find($id, $lockMode = null, $lockVersion = null)
 * @method Backpacker|null findOneBy(array $criteria, array $orderBy = null)
 * @method Backpacker[]    findAll()
 * @method Backpacker[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class BackpackerRepository extends ServiceEntityRepository
{
    public function __construct(RegistryInterface $registry)
    {
        parent::__construct($registry, Backpacker::class);
    }

//    /**
//     * @return Backpacker[] Returns an array of Backpacker objects
//     */
    /*
    public function findByExampleField($value)
    {
        return $this->createQueryBuilder('b')
            ->andWhere('b.exampleField = :val')
            ->setParameter('val', $value)
            ->orderBy('b.id', 'ASC')
            ->setMaxResults(10)
            ->getQuery()
            ->getResult()
        ;
    }
    */

    /*
    public function findOneBySomeField($value): ?Backpacker
    {
        return $this->createQueryBuilder('b')
            ->andWhere('b.exampleField = :val')
            ->setParameter('val', $value)
            ->getQuery()
            ->getOneOrNullResult()
        ;
    }
    */
}
