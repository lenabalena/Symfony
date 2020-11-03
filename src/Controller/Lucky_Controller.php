<?php
// src/Controller/LuckyController.php
namespace App\Controller;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Psr\Log\LoggerInterface;
    

class Lucky_Controller extends AbstractController
{ 	/**
      *@Route("/lucky_number")
      **/

    public function number(): Response
    {
        $number = random_int(0, 100);

        return $this->render('lucky_number.html.twig', [
            'number' => $number,
        ]);
    }
       public function index( LoggerInterface $logger)
{
    $logger->info("Saying hello to marilena!");

}
}
