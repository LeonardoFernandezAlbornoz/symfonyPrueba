<?php 

namespace App\Controller;

use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use function Symfony\Component\String\u;

class VinylController{

    #[Route("/")]
    function homepage(){
        return new Response("Title: PB and Jams");
    }

    #[Route("/browse/{slug}")]
    function browse(string $slug =null): Response
    {
       if($slug) {
        
        $title=u(str_replace("-"," ",$slug))->title(true);
        return new Response("Genre: $title");

       }else{
        $title="All genres";
        
       }

       return new Response($title);
    }

}

?>