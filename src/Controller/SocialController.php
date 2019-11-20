<?php


namespace App\Controller;


use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Routing\Annotation\Route;

class SocialController extends AbstractController
{
    /**
     * @Route("/contact", name="contact")
     */
    public function contact() {
        return $this->render('socialContact.html.twig');
    }

    /**
     * @Route("/profil", name="profil")
     */
    public function profil() {
        return $this->render('socialProfil.html.twig');
    }
}