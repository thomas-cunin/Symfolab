<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\Routing\Annotation\Route;

class MyController extends AbstractController
{
    /**
     * @Route("/user/{user}", name="welcome")
     */
    public function user(Request $request, $user)
    {
        
        return $this->render('user/index.html.twig', [
            'user_name' => $user,
        ]);
    }
}
