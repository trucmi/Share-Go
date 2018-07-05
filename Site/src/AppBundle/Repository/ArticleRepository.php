<?php

namespace AppBundle\Repository;

use AppBundle\Entity\Article;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepositoryInterface;
use Symfony\Bridge\Doctrine\RegistryInterface;

/**
 * @method Article|null find($id, $lockMode = null, $lockVersion = null)
 * @method Article|null findOneBy(array $criteria, array $orderBy = null)
 * @method Article[]    findAll()
 * @method Article[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class ArticleRepository extends ServiceEntityRepository
{
    public function __construct(RegistryInterface $registry)
    {
        parent::__construct($registry, Article::class);
    }
    public function articlehome()
    {
        $qb = $this->createQueryBuilder('n');

        $qb->orderBy('n.id', 'DESC');
        $qb->setMaxResults(2);

        return $qb->getQuery()
            ->getResult();
    }

    public function searchArticles($title) {
        return $this->getEntityManager()
            ->createQuery(
                'SELECT p FROM AppBundle:Article p WHERE p.title LIKE :title'
            )
            ->setParameter('title', '%' . $title . '%')
            ->getResult();
    }


    public function searchArticles($title) {
        return $this->getEntityManager()
            ->createQuery(
                'SELECT p FROM AppBundle:Article p WHERE p.title LIKE :title'
            )
            ->setParameter('title', '%' . $title . '%')
            ->getResult();
    }



    /*
    public function findOneBySomeField($value): ?Article
    {
        return $this->createQueryBuilder('a')
            ->andWhere('a.exampleField = :val')
            ->setParameter('val', $value)
            ->getQuery()
            ->getOneOrNullResult()
        ;
    }
    */
}
