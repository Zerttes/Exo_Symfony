<?php

namespace App\Controller;


use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class PageController

{

    /**
     * @Route ("/", name="home")
     */
    public function Home () {
       // var_dump ( 'Accueil'); die; Robert, Yesterday . create controllers
        // je retourne une réponse HTTP valide en utilisant
        // la classe Response du composant HTTPFoundation
       return new Response('Accueil');
    }

    /**
     * @Route ("/mention", name="mention")
     */
    public function mentionsLegales ()
    {
        return new Response ('mentions_légales'); die;

    }


}

