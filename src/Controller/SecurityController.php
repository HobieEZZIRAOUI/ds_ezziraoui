<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class SecurityController extends AbstractController
{
    /**
     * @Route("/security", name="app_security")
     */
    public function index(): Response
    {
        return $this->render('security/index.html.twig', [
            'controller_name' => 'SecurityController',
        ]);
    }
    /**
     * @Route("/login", name="login")
     */
    public function login(): Response
    {
        return $this->render('security/login.html.twig');
    }
	    /**
     * @Route("/logout", name="logout")
     */
	 public function logout(Request $request): Response
    {
		//on détruit toute trace de la session
		$session = $request->getSession();
		$session->clear();
		//on redirige vers le login
        return $this->redirectToRoute('login');
    }
}
