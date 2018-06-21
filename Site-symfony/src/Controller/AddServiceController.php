<?php

namespace App\Controller;

use Symfony\Component\Form\Extension\Core\Type\TextareaType;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use App\Entity\Service;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\Form\Extension\Core\Type\SubmitType;
use Symfony\Component\Form\Extension\Core\Type\ChoiceType;


class AddServiceController extends Controller
{
    /**
     * @Route("/addservice", name="addservice")
     */
    public function new(Request $request)
    {
        // creates a task and gives it some dummy data for this example
        $task = new Service();
        $form = $this->createFormBuilder($task)
            ->add('description', TextareaType::class)
            ->add('type',  ChoiceType::class, array(
                'choices'  => array(
                    'Débutant' => 'starter',
                    'Moyen' => 'Medium',
                    'Expert'=> 'Hard'
                ),
            ))
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
            return $this->redirect($this->generateUrl('addservice'));

        }

        return $this->render('add_task/index.html.twig', array(
            'form' => $form->createView(),
        ));
    }
}
