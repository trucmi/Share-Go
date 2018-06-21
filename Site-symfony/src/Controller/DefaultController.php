<?php

namespace App\Controller;

use App\Entity\Backpacker;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\Extension\Core\Type\DateType;
use Symfony\Component\Form\Extension\Core\Type\SubmitType;

class DefaultController extends Controller
{
    /**
     * @Route("/default", name="default")
     */

    public function new(Request $request)
    {
        // creates a task and gives it some dummy data for this example
        $task = new Backpacker();
        $form = $this->createFormBuilder($task)
            ->add('name', TextType::class)
            ->add('lastname', TextType::class)
            ->add('age', TextType::class)
            ->add('tel', TextType::class)
            ->add('mail', TextType::class)
            ->add('save', SubmitType::class, array('label' => 'Create Task'))
            ->getForm();
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            // $form->getData() holds the submitted values
            // but, the original `$task` variable has also been updated
            $task = $form->getData();

             $entityManager = $this->getDoctrine()->getManager();
            $entityManager->persist($task);
            $entityManager->flush();

        }

        return $this->render('default/index.html.twig', array(
            'form' => $form->createView(),
        ));
    }
}

