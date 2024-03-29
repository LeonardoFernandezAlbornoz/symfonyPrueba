<?php
namespace App\Controller;

use Psr\Log\LoggerInterface;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\JsonResponse;
use Symfony\Component\Routing\Annotation\Route;

class SongController extends AbstractController{

    #[Route("/api/songs/{id<\d+>}", methods:["GET"])]
    function getSong(int $id, LoggerInterface $logger){
        $song = [
        'id' => $id,
        'name' => 'Waterfalls',
        'url' => 'https://symfonycasts.s3.amazonaws.com/sample.mp3',
    ];

    $logger->info("Returning API respone for song  {song}",["song"=>$id]);
         //return new JsonResponse($song);
        return $this->json($song);
    }
}
 