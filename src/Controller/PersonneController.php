<?php

namespace App\Controller;

use App\Repository\PersonneRepository;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class PersonneController extends AbstractController
{
    #[Route('/personne', name: 'app_personne')]
    public function index(): Response
    {
        return $this->render('personne/index.html.twig', [
            'controller_name' => 'PersonneController',
        ]);
    }


    #[Route('/personnes', name: "listPersonnes")]
    public function listPersonne(PersonneRepository  $personneRepo)
    {
        return $this->render('personne/listPersonne.html.twig', ['personnes' => $personneRepo->findAll()]);
    }
}
