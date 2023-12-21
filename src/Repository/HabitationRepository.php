<?php

namespace App\Repository;

use App\Entity\Habitation;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Persistence\ManagerRegistry;

/**
 * @extends ServiceEntityRepository<Habitation>
 *
 * @method Habitation|null find($id, $lockMode = null, $lockVersion = null)
 * @method Habitation|null findOneBy(array $criteria, array $orderBy = null)
 * @method Habitation[]    findAll()
 * @method Habitation[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class HabitationRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, Habitation::class);
    }
    /**
     * @return Habitation[] Returns an array of Habitation objects
     */
    public function findByVille($ville): array
    {
        return $this->createQueryBuilder('h')
            ->andWhere('h.ville = :val')
            ->setParameter('val', $ville)
            ->orderBy('h.id', 'ASC')
            ->getQuery()
            ->getResult();
    }

    public function findOneByAdresse($adresse): ?Habitation
    {
        return $this->createQueryBuilder('h')
            ->andWhere('h.adresse = :val')
            ->setParameter('val', $adresse)
            ->getQuery()
            ->getOneOrNullResult();
    }

    
    public function findUniqueCities()
    {
        $entityManager = $this->getEntityManager();
    
        $query = $entityManager->createQuery(
            'SELECT DISTINCT h.ville FROM App\Entity\Habitation h'
        );
    
        return $query->getResult();
    }
    public function countHabitantsByVille($ville)
    {
        $em = $this->getEntityManager();

        $query = $em->createQuery(
            'SELECT COUNT(h.id) 
            FROM App\Entity\Habitant h
            JOIN h.habitation hab
            WHERE hab.ville = :ville'
        )->setParameter('ville', $ville);

        return $query->getSingleScalarResult();
    }

    public function totalSurfaceHabitableByVille($ville)
    {
        $em = $this->getEntityManager();

        $query = $em->createQuery(
            'SELECT SUM(hab.SurfaceHabitable) 
            FROM App\Entity\Habitation hab
            WHERE hab.ville = :ville'
        )->setParameter('ville', $ville);

        return $query->getSingleScalarResult();
    }

}
