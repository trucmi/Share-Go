<?php
/**
 * Created by PhpStorm.
 * User: Kévin
 * Date: 21/06/2018
 * Time: 13:47
 */

namespace App\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\Extension\Core\Type\RepeatedType;
use App\Entity\Users;

class AddUserType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array
    $options)
    {
        $builder
            ->add('username', TextType::class)
            ->add(‘plainPassword’,RepeatedType::class, array(
                ‘type’ => PasswordType::class,
                ‘first_options’ => array(‘label’ => ‘Password’),
                ‘second_options’ => array(‘label’ => ‘Repeat Password’),
           ))
}

}