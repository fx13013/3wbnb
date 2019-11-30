<?php

namespace App\Controller;

use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class HomeController extends Controller {

    /**
     * @Route("/", name="homepage")
     *
     * @return void
     */
    public function home(){
        $prenoms = ["Felix" => 37, "Alyss" => 35, "Meyline" => 8];

        return $this->render(
            'home.html.twig',
            [ 
                'title' => "Au revoir tout le monde",
                'age' => 12,
                'tableau' => $prenoms
            ]
        );
    }


    /**
     * @Route("/hello/{prenom}/age/{age}", name="hello")
     * @Route("/hello", name="hello_base")
     * @Route("/hello/{prenom}", name="hello_prenom")
     * Montre la page qui dit hello 
     *
     * @return void
     */
    public function hello($prenom = "anonyme", $age = 0){
        return $this->render(
            'hello.html.twig',
            [
                'prenom' => $prenom,
                'age' => $age
            ]
        );
    }
}





?>