<?php
/**
 * Created by PhpStorm.
 * User: criss
 * Date: 07/02/17
 * Time: 15:10
 */

namespace FY\ValentineBundle\Form;


use Doctrine\DBAL\Types\TextType;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\Extension\Core\Type\EmailType;
use Symfony\Component\Form\Extension\Core\Type\NumberType;
use Symfony\Component\Form\Extension\Core\Type\TextareaType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;

class FormType extends AbstractType
{

    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('firstName', TextType::class)
            ->add('lastName', TextType::class)
            ->add('authorEmail', EmailType::class)
            ->add('authorPhone', NumberType::class)
            ->add('city', TextType::class)
            ->add('comment', TextareaType::class)
            ;
    }

    public function configureOptions(OptionsResolver $resolver)
    {
        $resolver->setDefaults(array(
            'data_class'    =>  Form::class
        ));
    }

}