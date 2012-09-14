<?php

namespace Acme\DemoBundle\Form\Type;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;

use Symfony\Component\OptionsResolver\OptionsResolverInterface;

/**
 * Profile List Form Type
 *
 */
class ProfileListFormType extends AbstractType
{
    /**
     * {@inheritdoc}
     */
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder->add(
            'profileList',
            'collection',
            array(
                'type'         => 'acme_demo_profile_form',
                'by_reference' => false,
            )
        );
    }

    /**
     * {@inheritdoc}
     */
    public function setDefaultOptions(OptionsResolverInterface $resolver)
    {
        $resolver->setDefaults(array(
            'data_class' => 'Acme\DemoBundle\Form\Model\ProfileListFormModel',
            'label'      => 'Edit Profile List',
        ));
    }

    /**
     * {@inheritdoc}
     */
    public function getName()
    {
        return 'acme_demo_profile_list_form';
    }
}
