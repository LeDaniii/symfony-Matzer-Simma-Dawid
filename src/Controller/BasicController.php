<?php

namespace App\Controller;

use App\Entity\Travel;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class BasicController extends AbstractController
{
    /**
     * @Route("/", name="homepage")
     */
    public function index(): Response
    {
        $travel = $this->getDoctrine()
            ->getRepository(Travel::class)
            ->findAll(); // this variable $products will store the result of running a query to find

        return $this->render('basic/index.html.twig', [
            'controller_name' => 'BasicController',
            // array("travel" => $travel),
            "travel" => $travel,
        ]);
    }
    /**
     * @Route("/about", name="aboutpage")
     */
    public function about(): Response
    {
        return $this->render('basic/about.html.twig', [
            'controller_name' => 'BasicController',
        ]);
    }
    /**
     * @Route("/contact", name="contactpage")
     */
    public function contact(): Response
    {
        return $this->render('basic/contact.html.twig', [
            'controller_name' => 'BasicController',
        ]);
    }
    /**
     * @Route("/news", name="newspage")
     */
    public function news(): Response
    {
        return $this->render('basic/news.html.twig', [
            'controller_name' => 'BasicController',
        ]);
    }
}