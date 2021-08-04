<?php

namespace App\Controller;

use Symfony\Component\HttpFoundation\Request;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\Extension\Core\Type\NumberType;
use Symfony\Component\Form\Extension\Core\Type\SubmitType;



class FormController extends AbstractController
{
    /**
     * @Route("/form", name="form")
     */
    public function index(Request $request): Response
    {
        $form = $this->createFormBuilder()
            ->add('name', TextType::class)
            ->add('age', NumberType::class)
            ->add('color', TextType::class)
            ->add('submit', SubmitType::class)
            ->getForm();

        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $data = $form->getData();
            $isSuccess = true;
            
        }

        return $this->render('form/index.html.twig', [
            'basic_form' => $form->createView(),
            'data' => $data,
            'is_success' => $isSuccess,
        ]);
    }
};
