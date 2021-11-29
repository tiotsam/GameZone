<?php

namespace App\Repository;

use App\Entity\ProduitCommand;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Persistence\ManagerRegistry;

/**
 * @method ProduitCommand|null find($id, $lockMode = null, $lockVersion = null)
 * @method ProduitCommand|null findOneBy(array $criteria, array $orderBy = null)
 * @method ProduitCommand[]    findAll()
 * @method ProduitCommand[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class ProduitCommandRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, ProduitCommand::class);
    }

    // /**
    //  * @return ProduitCommand[] Returns an array of ProduitCommand objects
    //  */
    /*
    public function findByExampleField($value)
    {
        return $this->createQueryBuilder('p')
            ->andWhere('p.exampleField = :val')
            ->setParameter('val', $value)
            ->orderBy('p.id', 'ASC')
            ->setMaxResults(10)
            ->getQuery()
            ->getResult()
        ;
    }
    */

    /*
    public function findOneBySomeField($value): ?ProduitCommand
    {
        return $this->createQueryBuilder('p')
            ->andWhere('p.exampleField = :val')
            ->setParameter('val', $value)
            ->getQuery()
            ->getOneOrNullResult()
        ;
    }
    */
}
