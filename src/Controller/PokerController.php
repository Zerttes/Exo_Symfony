<?php

namespace App\Controller;

use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class PokerController
{
    /**
     * @Route("/poker", name="poker")
     */
    public function poker()
    {
        $request = Request::createFromGlobals();
        $response = $request->query->get('age');
        if ($response < 18) {
            return new Response('Dégage minot');
        }
        return new Response("Venez perdre de l'argent");
    }
}