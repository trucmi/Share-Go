<?php
namespace AppBundle\Controller;

use AppBundle\Entity\Users;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\Routing\Annotation\Route;
use AppBundle\Form\AddHostType;
use Symfony\Component\Security\Http\Authentication\AuthenticationUtils;
use Symfony\Component\Security\Core\Encoder\UserPasswordEncoderInterface;



class AddHostController extends Controller
{
    /**
     * @Route("/add_host", name="addhost")
     * @param Request $request
     * @param UserPasswordEncoderInterface $passwordEncoder
     * @return \Symfony\Component\HttpFoundation\RedirectResponse|\Symfony\Component\HttpFoundation\Response
     */
    public function AddHostAction (Request $request, UserPasswordEncoderInterface $passwordEncoder)
    {
// creates a user and gives it some dummy data for this example
        $user = new Users();
        $form = $this->createForm(AddHostType::class, $user);
        $form->handleRequest($request);
        if ($form->isSubmitted() && $form->isValid()) {
            $password = $passwordEncoder->encodePassword($user , $user->getPlainPassword());
            $user->setPassword($password);
            $user = $form->getData();
            $entityManager = $this->getDoctrine()->getManager();
            $entityManager->persist($user);
            $entityManager->flush();
            return $this->redirectToRoute('login');
        }
        return $this->render('update_host/index.html.twig', array(
            'controller_name' => 'AddHostController',
            'form' => $form->createView(),
        ));
    }
}



