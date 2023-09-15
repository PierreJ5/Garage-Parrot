<?php

namespace App\Repository;

use App\Entity\InfoVehicules;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Persistence\ManagerRegistry;

/**
 * @extends ServiceEntityRepository<InfoVehicules>
 *
 * @method InfoVehicules|null find($id, $lockMode = null, $lockVersion = null)
 * @method InfoVehicules|null findOneBy(array $criteria, array $orderBy = null)
 * @method InfoVehicules[]    findAll()
 * @method InfoVehicules[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class InfoVehiculesRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, InfoVehicules::class);
    }

//    /**
//     * @return InfoVehicules[] Returns an array of InfoVehicules objects
//     */
//    public function findByExampleField($value): array
//    {
//        return $this->createQueryBuilder('i')
//            ->andWhere('i.exampleField = :val')
//            ->setParameter('val', $value)
//            ->orderBy('i.id', 'ASC')
//            ->setMaxResults(10)
//            ->getQuery()
//            ->getResult()
//        ;
//    }

//    public function findOneBySomeField($value): ?InfoVehicules
//    {
//        return $this->createQueryBuilder('i')
//            ->andWhere('i.exampleField = :val')
//            ->setParameter('val', $value)
//            ->getQuery()
//            ->getOneOrNullResult()
//        ;
//    }
}
