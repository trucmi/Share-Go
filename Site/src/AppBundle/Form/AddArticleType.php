<?php
/**
 * Created by PhpStorm.
 * User: Kévin
 * Date: 24/06/2018
 * Time: 10:17
 */

namespace AppBundle\Form;

use AppBundle\Entity\Article;

use Doctrine\DBAL\Types\DateTimeType;
use Doctrine\DBAL\Types\IntegerType;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\Extension\Core\Type\HiddenType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;
use Symfony\Component\Form\Extension\Core\Type\TextareaType;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\Extension\Core\Type\SubmitType;
use Symfony\Component\Form\Extension\Core\Type\FileType;
use Symfony\Component\Form\Extension\Core\Type\ChoiceType;
use Doctrine\ORM\EntityRepository;

class AddArticleType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options)
    {

        $builder
            ->add('title', TextType::class ,['label'=>'Titre'])
            ->add('accroche', TextType::class,['label'=>'Sous-titre'])
            ->add('description', TextareaType::class,['label'=>'Description'])
            ->add('categorie', ChoiceType::class, array(
                'choices'  => array(
                    'backpacker' => 'Recommandé par les backpackers',
                    'Admin' => 'A voir absolument ',

                )))
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

            ->add('image', FileType::class, array('label' => 'image'))

            ->add('save', SubmitType::class, array(
                'attr' => array('class' => 'save')));

    }
    public function configureOptions(OptionsResolver $resolver)
    {
        $resolver->setDefaults(array(
            'data_class' => Article::class,
        ));
    }
}