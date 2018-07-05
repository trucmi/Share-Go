<?php
/**
 * Created by PhpStorm.
 * User: Kévin
 * Date: 23/06/2018
 * Time: 19:43
 */

namespace AppBundle\Form;
use AppBundle\Entity\Job;
use AppBundle\Entity\Users;
use Doctrine\DBAL\Types\IntegerType;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\Extension\Core\Type\HiddenType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;
use Symfony\Component\Form\Extension\Core\Type\ChoiceType;
use Symfony\Component\Form\Extension\Core\Type\TextareaType;
use Symfony\Component\Form\Extension\Core\Type\SubmitType;
use Symfony\Component\Form\Extension\Core\Type\FileType;
use Doctrine\ORM\EntityRepository;


class AddJobType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options)
    {

        $builder
            ->add('titre', TextareaType::class,['label'=>'Titre'])
            ->add('Description', TextareaType::class,['label'=>'Description'])
            ->add('type',  ChoiceType::class, array(
                'choices'  => array(
                    'Argent' => 'Argent',
                    'Hébergement' => 'Hébergement',
                )),['label'=>'Type'])
            ->add('pays',  ChoiceType::class, array(
                'choices'  => array(
                    'France' => 'France',
                    'Norvège' =>'Norvège',
                    'Brésil' => 'Brésil',
                    'Péru' => 'Péru',
                    'Australie' => 'Australie',
                    'Viêt nam' => 'Viêt nam',
                    'Canada' => 'Canada',
                )),['label'=>'Pays'])

            ->add('wifi',  ChoiceType::class, array(
                'choices'  => array(
                    'oui' => 'oui',
                    'non' => 'non',
                )),['label'=>'Donnez-vous la Wifi ?'])

            ->add('wifi',  ChoiceType::class, array(
                'choices'  => array(
                    'français' => 'français',
                    'anglais' => 'anglais',
                )),['label'=>'Langue'])


            ->add('nombre', IntegerType::class,['label'=>'Description'])


            ->add('image', FileType::class, array('label' => 'image'))

            ->add('save', SubmitType::class, array(
                'attr' => array('class' => 'save')));

    }
    public function configureOptions(OptionsResolver $resolver)
    {
        $resolver->setDefaults(array(
            'data_class' => Job::class,
        ));
    }

}