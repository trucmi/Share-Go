<?php

namespace App\Repository;

use App\Entity\Hotes;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Symfony\Bridge\Doctrine\RegistryInterface;

/**
 * @method Hotes|null find($id, $lockMode = null, $lockVersion = null)
 * @method Hotes|null findOneBy(array $criteria, array $orderBy = null)
 * @method Hotes[]    findAll()
 * @method Hotes[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class HotesRepository extends ServiceEntityRepository
{
    public function __construct(RegistryInterface $registry)
    {
        parent::__construct($registry, Hotes::class);
    }

//    /**
//     * @return Hotes[] Returns an array of Hotes objects
//     */
    /*
    public function findByExampleField($value)
    {
        return $this->createQueryBuilder('h')
            ->andWhere('h.exampleField = :val')
            ->setParameter('val', $value)
            ->orderBy('h.id', 'ASC')
            ->setMaxResults(10)
            ->getQuery()
            ->getResult()
        ;
    }
    */

    /*
    public function findOneBySomeField($value): ?Hotes
    {
        return $this->createQueryBuilder('h')
            ->andWhere('h.exampleField = :val')
            ->setParameter('val', $value)
            ->getQuery()
            ->getOneOrNullResult()
        ;
    }
    */
}
