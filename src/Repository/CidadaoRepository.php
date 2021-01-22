<?php

namespace App\Repository;

use App\Entity\Cidadao;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Persistence\ManagerRegistry;

/**
 * @method Cidadao|null find($id, $lockMode = null, $lockVersion = null)
 * @method Cidadao|null findOneBy(array $criteria, array $orderBy = null)
 * @method Cidadao[]    findAll()
 * @method Cidadao[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class CidadaoRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, Cidadao::class);
    }

    /**
    * @return Cidadao[] Returns an array of Cidadao objects
    */
  
    public function findByCPF($value)
    {
        return $this->createQueryBuilder('c')
            ->andWhere('c.cpf = :val')
            ->setParameter('val', $value)
            ->orderBy('c.id', 'ASC')
            ->getQuery()
            ->getResult()
        ;
    }
    

    /*
    public function findOneBySomeField($value): ?Cidadao
    {
        return $this->createQueryBuilder('c')
            ->andWhere('c.exampleField = :val')
            ->setParameter('val', $value)
            ->getQuery()
            ->getOneOrNullResult()
        ;
    }
    */
    
}
