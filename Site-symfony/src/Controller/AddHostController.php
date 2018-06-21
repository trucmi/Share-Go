<?php

namespace App\Controller;

use App\Entity\Hotes;
use App\Entity\Pays;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\Extension\Core\Type\IntegerType;
use Symfony\Component\Form\Extension\Core\Type\SubmitType;
use Symfony\Component\Form\Extension\Core\Type\ChoiceType;

class AddHostController extends Controller
{
    /**
     * @Route("/AddHost", name="Addhost")
     */

    public function new(Request $request)
    {
        // creates a task and gives it some dummy data for this example
        $task = new Hotes();
        $form = $this->createFormBuilder($task)
            ->add('nom', TextType::class)
            ->add('prenom', TextType::class)
            ->add('adresse', TextType::class)
            ->add('tel', TextType::class)
            ->add('mail', TextType::class)
            ->add('profil',  ChoiceType::class, array(
                'choices'  => array(
                    'Entreprise' => 'CIE',
                    'Particulier' => 'Host',
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
            return $this->redirect($this->generateUrl('Addhost'));

        }

        return $this->render('update_host/index.html.twig', array(
            'form' => $form->createView(),
        ));
    }
    public function index()
    {
        return $this->render('update_host/index.html.twig', [
            'controller_name' => 'AddHostController',
        ]);
    }
}
