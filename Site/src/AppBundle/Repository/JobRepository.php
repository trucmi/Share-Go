<?php

namespace AppBundle\Repository;

use AppBundle\Entity\Job;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepositoryInterface;
use Symfony\Bridge\Doctrine\RegistryInterface;

/**
 * @method Job|null find($id, $lockMode = null, $lockVersion = null)
 * @method Job|null findOneBy(array $criteria, array $orderBy = null)
 * @method Job[]    findAll()
 * @method Job[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class JobRepository extends ServiceEntityRepository
{
    public function __construct(RegistryInterface $registry)
    {
        parent::__construct($registry, Job::class);
    }
    public function Jobhome()
    {
        $qb = $this->createQueryBuilder('n');

        $qb->orderBy('n.id', 'DESC');
        $qb->setMaxResults(2);

        return $qb->getQuery()
            ->getResult();
    }
    public function searchJobs($title) {
        return $this->getEntityManager()
            ->createQuery(
                'SELECT p FROM AppBundle:Job p WHERE p.title LIKE :title'
            )
            ->setParameter('title', '%' . $title . '%')
            ->getResult();
    }


    public function searchJobs($title) {
        return $this->getEntityManager()
            ->createQuery(
                'SELECT p FROM AppBundle:Job p WHERE p.title LIKE :title'
            )
            ->setParameter('title', '%' . $title . '%')
            ->getResult();
    }

//    /**
//     * @return TypeService[] Returns an array of TypeService objects
//     */
    /*
    public function findByExampleField($value)
    {
        return $this->createQueryBuilder('t')
            ->andWhere('t.exampleField = :val')
            ->setParameter('val', $value)
            ->orderBy('t.id', 'ASC')
            ->setMaxResults(10)
            ->getQuery()
            ->getResult()
        ;
    }
    */

    /*
    public function findOneBySomeField($value): ?TypeService
    {
        return $this->createQueryBuilder('t')
            ->andWhere('t.exampleField = :val')
            ->setParameter('val', $value)
            ->getQuery()
            ->getOneOrNullResult()
        ;
    }
    */
}
