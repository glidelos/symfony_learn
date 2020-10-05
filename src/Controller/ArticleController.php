<?php


namespace App\Controller;

use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class ArticleController
{
    /**
     * @Route("/")
     */
    public function  homepage(){
        return new Response('this is my first page');
    }

    /**
     * @Route("/{slug}")
     */
    public function  newArticle($slug){
        return new Response('this is my '.$slug);
    }
}