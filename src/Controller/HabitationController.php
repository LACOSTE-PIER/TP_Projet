<?php

namespace App\Controller;

use App\Repository\HabitantRepository;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\HttpFoundation\Request;
use App\Entity\Habitation;
use App\Form\HabitationType;
use Doctrine\ORM\EntityManagerInterface;
use App\Repository\HabitationRepository;
use App\Form\SelectVilleType;

#[Route('/habitation')]
class HabitationController extends AbstractController
{
    private $habitationRepository;
    
    public function __construct(HabitationRepository $habitationRepository)
    {
        $this->habitationRepository = $habitationRepository;
    }



    #[Route('/new', name: 'app_habitation_new', methods: ['GET', 'POST'])]
    public function new(Request $request, EntityManagerInterface $entityManager): Response
    {
        $habitation = new Habitation();
        $form = $this->createForm(HabitationType::class, $habitation);
        $form->handleRequest($request);
    
        if ($form->isSubmitted() && $form->isValid()) {
           
            if ($habitation->getAdresse() === null) {
                
                $this->addFlash('error', 'L\'adresse ne peut pas être vide.');
                return $this->render('habitation/new.html.twig', [
                    'form' => $form->createView(),
                ]);
            }
            else{
                $entityManager->persist($habitation);
                $entityManager->flush();
                return $this->redirectToRoute('app_habitant_index');
            }
            
            
        }
    
        return $this->render('habitation/new.html.twig', [
            'habitation' => $habitation,
            'form' => $form->createView(),
        ]);
    }

    #[Route('/liste', name: 'app_habitation_index', methods: ['GET'])]
    public function index(HabitationRepository $habitationRepository): Response
    {
        $habitations = $habitationRepository->findAll();
        return $this->render('habitation/index.html.twig', [
            'habitations' => $habitations,
        ]);
    }

    #[Route('/ville/{ville}/statistiques', name: 'app_ville_statistiques')]
    public function statistiques($ville, HabitantRepository $habitantRepository): Response
    {
        $moyenneAge = $habitantRepository->findAverageAgeByVille($ville);
        //$densitePopulation = $habitantRepository->findDensityByVille($ville);
        $nombreHabitants = $this->habitationRepository->countHabitantsByVille($ville);
        $surfaceTotale = $this->habitationRepository->totalSurfaceHabitableByVille($ville);
    
        return $this->render('ville/statistiques.html.twig', [
            'moyenneAge' => $moyenneAge,
            'nbHabitants' => $nombreHabitants,
            'surfaceTotale' => $surfaceTotale ,
            //'densitePopulation' => $densitePopulation,
            'nomVille' => $ville,
        ]);
    }

    #[Route('/habitation/{id}/habitants', name: 'app_habitation_view_habitants')]
    public function viewHabitants(Habitation $habitation): Response
    {
        
        $habitants = $habitation->getHabitants();

        return $this->render('habitation/view_habitants.html.twig', [
            'habitation' => $habitation,
            'habitants' => $habitants,
        ]);
    }





/*
Si tu vois ça julien j'ai juste mal compris le sujet et je suis partit dans une directions autre, et ducoup j'ai juste enlever a l'interface car Hors sujet

*/
   
    #[Route('/select-ville', name: 'app_select_ville')]
    public function selectVille(Request $request, HabitationRepository $habitationRepository)
    {
        $villesArray = $habitationRepository->findUniqueCities();
        $villesChoices = [];
        foreach ($villesArray as $ville) {
            $villesChoices[$ville['ville']] = $ville['ville'];
        }

        $form = $this->createForm(SelectVilleType::class, null, [
            'villes' => $villesChoices,
        ]);
        
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $ville = $form->get('ville')->getData();
            return $this->redirectToRoute('app_ville_statistiques', ['ville' => $ville]);
        }

        return $this->render('ville/select.html.twig', [
            'form' => $form->createView(),
        ]);
    }

    #[Route('/habitation/{id}', name: 'app_habitation_show', methods: ['GET'])]
    public function show(Habitation $habitation): Response
    {
        
        return $this->render('habitation/show.html.twig', [
            'habitation' => $habitation,
        ]);
    }

    #[Route('/habitation/{id}', name: 'app_habitation_delete', methods: ['POST'])]
    public function delete(Request $request, Habitation $habitation, EntityManagerInterface $entityManager): Response
    {
        if ($this->isCsrfTokenValid('delete'.$habitation->getId(), $request->request->get('_token'))) {
            foreach ($habitation->getHabitants() as $habitant) {
                $habitant->setHabitation(null);
                $entityManager->persist($habitant);
            }
            
            $entityManager->remove($habitation);
            $entityManager->flush();
        }

        return $this->redirectToRoute('app_habitation_index');
    }
}
