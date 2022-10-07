<?php

namespace App\Form;

use App\Entity\Users;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;
use Symfony\Component\Form\Extension\Core\Type\EmailType;
use Symfony\Component\Form\Extension\Core\Type\SubmitType;

class UsersFormType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options): void
    {
        $builder
            ->add('name')
            ->add('username')
            ->add('email', EmailType::class)
            ->add('adressStreet')
            ->add('adressSuite')
            ->add('adressCity')
            ->add('adressZipcode')
            ->add('adressGeoLat')
            ->add('adressGeoLng')
            ->add('phone')
            ->add('website')
            ->add('companyName')
            ->add('companyCatchPhrase')
            ->add('companyBs')
            ->add('Submit', SubmitType::class)
        ;
    }

    public function configureOptions(OptionsResolver $resolver): void
    {
        $resolver->setDefaults([
            'data_class' => Users::class,
            'csrf_protection' => true,
            'csrf_field_name' => '_token',
            'csrf_token_id' => 'users_item',
        ]);
    }
}
