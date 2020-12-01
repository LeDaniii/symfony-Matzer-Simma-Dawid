<?php

namespace App\Controller;

use App\Entity\Travel;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class TravelController extends AbstractController
{
    /**
     * @Route("/travelcon", name="indexAction")
     */
    public function indexAction()
    {
        $travel = $this->getDoctrine()
            ->getRepository(Travel::class)
            ->findAll(); // this variable $products will store the result of running a query to find all the products
        return $this->render('travel/index.html.twig', array("travel" => $travel)); // i send the variable that have all the products as an array of objects to the index.html.twig page
    }
    /**
     * @Route("/travel", name="travel")
     */
    public function index(): Response
    {
        return $this->render('travel/index.html.twig', [
            'controller_name' => 'TravelController',
        ]);
    }
}