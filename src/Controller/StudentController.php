<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class StudentController extends AbstractController
{



    #[Route("/hello", name: "Bonjour")]
    public function index()
    {


        return new Response("<h1> Bonjour mes étudiants </h1>");
    }
}
