<?php

namespace App\Repository;

use App\Entity\ServicesPrincipaux;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Persistence\ManagerRegistry;

/**
 * @extends ServiceEntityRepository<ServicesPrincipaux>
 *
 * @method ServicesPrincipaux|null find($id, $lockMode = null, $lockVersion = null)
 * @method ServicesPrincipaux|null findOneBy(array $criteria, array $orderBy = null)
 * @method ServicesPrincipaux[]    findAll()
 * @method ServicesPrincipaux[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class ServicesPrincipauxRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, ServicesPrincipaux::class);
    }

//    /**
//     * @return ServicesPrincipaux[] Returns an array of ServicesPrincipaux objects
//     */
//    public function findByExampleField($value): array
//    {
//        return $this->createQueryBuilder('s')
//            ->andWhere('s.exampleField = :val')
//            ->setParameter('val', $value)
//            ->orderBy('s.id', 'ASC')
//            ->setMaxResults(10)
//            ->getQuery()
//            ->getResult()
//        ;
//    }

//    public function findOneBySomeField($value): ?ServicesPrincipaux
//    {
//        return $this->createQueryBuilder('s')
//            ->andWhere('s.exampleField = :val')
//            ->setParameter('val', $value)
//            ->getQuery()
//            ->getOneOrNullResult()
//        ;
//    }
}
