<?php

namespace App\Controller;

use App\Entity\Backpacker;

use App\Entity\Users;
use AppTestBundle\Entity\FunctionalTests\User;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;;



class AddBackpackerController extends Controller
{
    /**
     * @Route("/add_backpacker", name="add_backpacker")
     */

    public function proposeAction(Request $request)
    {
        $post = new User();
        $form = $this->createForm(new AddUserType(), $post);

        return [
            'form' => $form->createView(),
        ];
    }


}



