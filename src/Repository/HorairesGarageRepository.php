<?php

namespace App\Repository;

use App\Entity\HorairesGarage;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Persistence\ManagerRegistry;

/**
 * @extends ServiceEntityRepository<HorairesGarage>
 *
 * @method HorairesGarage|null find($id, $lockMode = null, $lockVersion = null)
 * @method HorairesGarage|null findOneBy(array $criteria, array $orderBy = null)
 * @method HorairesGarage[]    findAll()
 * @method HorairesGarage[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class HorairesGarageRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, HorairesGarage::class);
    }

//    /**
//     * @return HorairesGarage[] Returns an array of HorairesGarage objects
//     */
//    public function findByExampleField($value): array
//    {
//        return $this->createQueryBuilder('h')
//            ->andWhere('h.exampleField = :val')
//            ->setParameter('val', $value)
//            ->orderBy('h.id', 'ASC')
//            ->setMaxResults(10)
//            ->getQuery()
//            ->getResult()
//        ;
//    }

//    public function findOneBySomeField($value): ?HorairesGarage
//    {
//        return $this->createQueryBuilder('h')
//            ->andWhere('h.exampleField = :val')
//            ->setParameter('val', $value)
//            ->getQuery()
//            ->getOneOrNullResult()
//        ;
//    }
}
