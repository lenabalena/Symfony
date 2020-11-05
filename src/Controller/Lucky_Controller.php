<?php
// src/Controller/LuckyController.php
namespace App\Controller;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use App\GreetingGenerator;
use App\Service\MessageGenerator;
//use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Psr\Log\LoggerInterface;
    

class Lucky_Controller extends AbstractController
{ 	

    /*public function number(): Response
    {
        $number = random_int(0, 100);

        return $this->render('lucky_number.html.twig', [
            'number' => $number,
        ]);
    }*/
    /**
      *@Route("/hello/{name}")
      **/
       public function new($name, LoggerInterface $logger, GreetingGenerator $generator)
    {
        $greeting = $generator->getRandomGreeting();

        $logger->info("Saying $greeting to $name!");

}

}
?>
