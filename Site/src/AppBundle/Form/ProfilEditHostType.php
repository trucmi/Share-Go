<?php
/**
 * Created by PhpStorm.
 * User: monic
 * Date: 18/03/2018
 * Time: 21:13
 */
namespace AppBundle\Form;
use AppBundle\Entity\Users;

use function Sodium\add;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\Extension\Core\Type\EmailType;
use Symfony\Component\Form\Extension\Core\Type\PasswordType;
use Symfony\Component\Form\Extension\Core\Type\RepeatedType;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;
use Symfony\Component\Form\Extension\Core\Type\ChoiceType;

class ProfilEditHostType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->setAction('edit_host')
            ->setMethod('POST')
            ->add('username', EmailType::class, [
                'label' => "Mail"
            ])

            ->add('plainPassword', RepeatedType::class, [
                'type' => PasswordType::class,
                'label' => "mdp profil",
                'first_options' => array('label' => 'Modifier le mot de passe'),
                'second_options' => array('label' => 'Répéter le mot de passe')
            ])
            ->add('lastname', TextType::class, [
                'label' => "Nom"
            ])
            ->add('name', TextType::class, [
                'label' => "Prénom"
            ])

            ->add('adresse',TextType::class)

            ->add('langue', ChoiceType::class, array(
                'choices'  => array(
                    'France' => 'france',
                    'Angleterre' => 'angleterre',
                    'Espagne' => "espagne",
                )))
            ->add('pays', ChoiceType::class, array(
                'choices'  => array(
                    'France' => 'france',
                    'Angleterre' => 'angleterre',
                    'Espagne' => "espagne",
                )))
        ;
    }

    public function configureOptions(OptionsResolver $resolver)
    {
        $resolver->setDefaults([
            // uncomment if you want to bind to a class -> changer en User class
            'data_class' => Users::class,
        ]);
    }
}