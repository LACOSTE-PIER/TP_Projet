<?php

namespace App\Controller;

use App\Entity\Habitant;
use App\Entity\Habitation;
use App\Form\HabitantType;
use App\Repository\HabitantRepository;
use App\Repository\HabitationRepository;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

#[Route('/habitant')]
class HabitantController extends AbstractController
{
    #[Route('/', name: 'app_habitant_index', methods: ['GET'])]
    public function index(HabitantRepository $habitantRepository): Response
    {
        return $this->render('habitant/index.html.twig', [
            'habitants' => $habitantRepository->findAll(),
        ]);
    }

    #[Route('/new', name: 'app_habitant_new', methods: ['GET', 'POST'])]
    public function new(Request $request, EntityManagerInterface $entityManager): Response
    {
        $habitant = new Habitant();
        $form = $this->createForm(HabitantType::class, $habitant);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {

            if ($habitant->getNomFamille() === null) {
                $this->addFlash('error', 'L\'adresse ne peut pas être vide.');
                return $this->render('habitant/new.html.twig', [
                    'form' => $form->createView(),
                ]);
            }
            else{
                $entityManager->persist($habitant);
                $entityManager->flush();

                return $this->redirectToRoute('app_habitant_index', [], Response::HTTP_SEE_OTHER);
            }
        }

        return $this->render('habitant/new.html.twig', [
            'habitant' => $habitant,
            'form' => $form,
        ]);
    }

    #[Route('/{id}', name: 'app_habitant_show', methods: ['GET'])]
    public function show(Habitant $habitant): Response
    {
        return $this->render('habitant/show.html.twig', [
            'habitant' => $habitant,
        ]);
    }

    #[Route('/{id}/edit', name: 'app_habitant_edit', methods: ['GET', 'POST'])]
    public function edit(Request $request, Habitant $habitant, EntityManagerInterface $entityManager): Response
    {
        $form = $this->createForm(HabitantType::class, $habitant);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $entityManager->flush();

            return $this->redirectToRoute('app_habitant_index', [], Response::HTTP_SEE_OTHER);
        }

        return $this->render('habitant/edit.html.twig', [
            'habitant' => $habitant,
            'form' => $form,
        ]);
    }

    #[Route('/{id}', name: 'app_habitant_delete', methods: ['POST'])]
    public function delete(Request $request, Habitant $habitant, EntityManagerInterface $entityManager): Response
    {
        if ($this->isCsrfTokenValid('delete'.$habitant->getId(), $request->request->get('_token'))) {
            $entityManager->remove($habitant);
            $entityManager->flush();
        }

        return $this->redirectToRoute('app_habitant_index', [], Response::HTTP_SEE_OTHER);
    }
}
