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
use Symfony\Component\Form\Extension\Core\Type\FileType;
use Symfony\Component\Form\Extension\Core\Type\PasswordType;
use Symfony\Component\Form\Extension\Core\Type\RepeatedType;
use Symfony\Component\Form\Extension\Core\Type\TextareaType;
use Symfony\Component\Form\Extension\Core\Type\IntegerType;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;
use Symfony\Component\Form\Extension\Core\Type\ChoiceType;

class ProfilEditType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->setAction('edit_backpacker')
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
            ->add('tel', TextType::class, [
                'label' => "Téléphone"
            ])
            ->add('age', IntegerType::class, [
                'label'=> "Âge"])


            ->add('langue', ChoiceType::class, array(
                'choices'  => array(
                    'Français' => 'Français',
                    'Anglais' => 'Anglais',
                    'Espagnol' => "Espagnol",
                )))
            ->add('destination', ChoiceType::class, array(
                'choices'  => array(
                    'France' => 'France',
                    'Norvège' =>'Norvège',
                    'Brésil' => 'Brésil',
                    'Péru' => 'Péru',
                    'Australie' => 'Australie',
                    'Viêt nam' => 'Viêt nam',
                    'Canada' => 'Canada',
                )))
            ->add('Experience', ChoiceType::class, array(
                'choices'  => array(
                    'Débutant' => 'Débutant',
                    'Moyenne' => 'Moyenne',
                    'Expert' => "Expert",
                )))
            ->add('pays', ChoiceType::class, array(
                'choices'  => array(
                    'France' => 'France',
                    'Angleterre' => 'Angleterre',
                    'Espagne' => "Espagne",
                ),'label' =>'Votre prochaine destination'))

            ->add('image', FileType::class,array(
                'label' => 'Votre photo : ','data_class' => null));
    }

    public function configureOptions(OptionsResolver $resolver)
    {
        $resolver->setDefaults([
            // uncomment if you want to bind to a class -> changer en User class
            'data_class' => Users::class,
        ]);
    }
}