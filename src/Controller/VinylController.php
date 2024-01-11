<?php 

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use function Symfony\Component\String\u;

class VinylController extends AbstractController{
  
    #[Route("/")]
    function homepage(){
        $tracks = [
            ['song' => 'Gangsta\'s Paradise', 'artist' => 'Coolio'],
            ['song' => 'Waterfalls', 'artist' => 'TLC'],
            ['song' => 'Creep', 'artist' => 'Radiohead'],
            ['song' => 'Kiss from a Rose', 'artist' => 'Seal'],
            ['song' => 'On Bended Knee', 'artist' => 'Boyz II Men'],
            ['song' => 'Fantasy', 'artist' => 'Mariah Carey'],
        ];
        dump($tracks);

        return $this->render("vinyl/homepage.html.twig",["genre"=>"PB & Jams","tracks"=>$tracks]);
    }

    #[Route("/browse/{slug}")]
    function browse(string $slug =null): Response
    {
       if($slug) {
        
        $genre="Genre: ".u(str_replace("-"," ",$slug))->title(true);

       }else{
        $genre="All genres";

       }
     
       return $this->render("vinyl/browse.html.twig",["genre"=>$genre]);
    }

}

?>