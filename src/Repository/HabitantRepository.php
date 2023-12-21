<?php

namespace App\Repository;

use App\Entity\Habitant;
use App\Entity\Habitation;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Persistence\ManagerRegistry;
use Doctrine\ORM\Query;

class HabitantRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, Habitant::class);
    }


    public function findAverageAgeByVille($ville)
    {
        $habitants = $this->createQueryBuilder('h')
            ->join('h.habitation', 'hab')
            ->where('hab.ville = :ville')
            ->setParameter('ville', $ville)
            ->getQuery()
            ->getResult();
    
        $totalAge = 0;
        $count = count($habitants);
    
        foreach ($habitants as $habitant) {
            $dateNaissance = $habitant->getDateDeNaissance();
            if ($dateNaissance) {
                $age = $dateNaissance->diff(new \DateTime())->y;
                $totalAge += $age;
            }
        }
    
        return $count > 0 ? $totalAge / $count : 0;
    }
    public function findDensityByVille($ville)
    {
        $em = $this->getEntityManager();
    
        // Requête pour obtenir la surface habitable totale
        $querySurface = $em->createQuery(
            'SELECT SUM(hab.SurfaceHabitable) as totalSurface
            FROM App\Entity\Habitation hab
            WHERE hab.ville = :ville'
        )->setParameter('ville', $ville);
    
        // Requête pour obtenir le nombre total d'habitants
        $queryHabitants = $em->createQuery(
            'SELECT COUNT(habitant.id) as nombreHabitants
            FROM App\Entity\Habitant habitant
            JOIN habitant.habitation habitation
            WHERE habitation.ville = :ville'
        )->setParameter('ville', $ville);
    
        $totalSurfaceHabitable = $querySurface->getSingleScalarResult();
        $nombreHabitants = $queryHabitants->getSingleScalarResult();
        
        // Calcul de la densité
        $densiteMoyenne = $totalSurfaceHabitable > 0 ? $nombreHabitants / $totalSurfaceHabitable : 0;
    
        return $densiteMoyenne;
    }
    

 

}