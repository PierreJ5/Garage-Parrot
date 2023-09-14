<?php

namespace App\Repository;

use App\Entity\AvisAttente;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Persistence\ManagerRegistry;

/**
 * @extends ServiceEntityRepository<AvisAttente>
 *
 * @method AvisAttente|null find($id, $lockMode = null, $lockVersion = null)
 * @method AvisAttente|null findOneBy(array $criteria, array $orderBy = null)
 * @method AvisAttente[]    findAll()
 * @method AvisAttente[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class AvisAttenteRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, AvisAttente::class);
    }

//    /**
//     * @return AvisAttente[] Returns an array of AvisAttente objects
//     */
//    public function findByExampleField($value): array
//    {
//        return $this->createQueryBuilder('a')
//            ->andWhere('a.exampleField = :val')
//            ->setParameter('val', $value)
//            ->orderBy('a.id', 'ASC')
//            ->setMaxResults(10)
//            ->getQuery()
//            ->getResult()
//        ;
//    }

//    public function findOneBySomeField($value): ?AvisAttente
//    {
//        return $this->createQueryBuilder('a')
//            ->andWhere('a.exampleField = :val')
//            ->setParameter('val', $value)
//            ->getQuery()
//            ->getOneOrNullResult()
//        ;
//    }
}
