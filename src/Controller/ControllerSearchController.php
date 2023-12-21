<?php

namespace App\Controller;

use App\Repository\HabitantRepository;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\JsonResponse;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class ControllerSearchController extends AbstractController
{
    #[Route('/search', name: 'controller_search_index')]
    public function index(Request $request, HabitantRepository $habitantRepository): Response
    {
        $searchTerm = $request->query->get('searchTerm');

        $habitants = null;
        if ($searchTerm) {
            $habitants = $habitantRepository->findByNomFamille($searchTerm);
        }

        return $this->render('controller_search/index.html.twig', [
            'controller_name' => 'ControllerSearchController',
            'habitants' => $habitants,
        ]);
    }
}
