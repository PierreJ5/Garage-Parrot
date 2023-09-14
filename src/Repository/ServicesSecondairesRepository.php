<?php

namespace App\Repository;

use App\Entity\ServicesSecondaires;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Persistence\ManagerRegistry;

/**
 * @extends ServiceEntityRepository<ServicesSecondaires>
 *
 * @method ServicesSecondaires|null find($id, $lockMode = null, $lockVersion = null)
 * @method ServicesSecondaires|null findOneBy(array $criteria, array $orderBy = null)
 * @method ServicesSecondaires[]    findAll()
 * @method ServicesSecondaires[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class ServicesSecondairesRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, ServicesSecondaires::class);
    }

//    /**
//     * @return ServicesSecondaires[] Returns an array of ServicesSecondaires objects
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

//    public function findOneBySomeField($value): ?ServicesSecondaires
//    {
//        return $this->createQueryBuilder('s')
//            ->andWhere('s.exampleField = :val')
//            ->setParameter('val', $value)
//            ->getQuery()
//            ->getOneOrNullResult()
//        ;
//    }
}
