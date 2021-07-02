<?php


namespace App\Controller;

use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class ArticleController
{
    /**
     * @Route ("/articles", name="articles")
     */

 public function articles ()
 {
     return new Response ('listes articles');
}
    /**
     * @Route("/article/{id}", name="articleShow")
     */
    public function article ($id)
    {
        return new Response($id);
    }

}