<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class TeacherController extends AbstractController
{
    #[Route('/teacher', name: 'app_teacher')]
    public function index(): Response
    {

        $a = "aaaaaaaa";

        $b = 20;

        $c = 10;

        $sum = $b + $c;


        return $this->render('teacher/index.html.twig', [
            "sum" => $sum

        ]);
    }








    #[Route('/test/{b}')]
    public function test($b): Response
    {

        $number  = $b;

        return   $this->render('testD/test.html.twig',   ["a" => $number]);
    }




    #[Route('/redirect')]
    public function goToIndex()
    {


        return $this->redirectToRoute("app_teacher");
    }




    #[Route('/show/{name}', name: "show")]
    public function show($name)
    {



        return $this->render('show.html.twig', ["name" => $name]);
    }
}
