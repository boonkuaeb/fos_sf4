<?php
/**
 * Created by PhpStorm.
 * User: boonkuaeboonsutta
 * Date: 7/9/2018 AD
 * Time: 14:16
 */

namespace App\Form;


use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use FOS\UserBundle\Form\Type\RegistrationFormType as BaseRegistrationFormType;

class RegistrationFormType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('firstName');

    }

    public function getParent()
    {
       return BaseRegistrationFormType::class;
    }


}