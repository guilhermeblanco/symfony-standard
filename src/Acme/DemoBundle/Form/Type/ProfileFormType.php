<?php

namespace Acme\DemoBundle\Form\Type;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;

use Symfony\Component\OptionsResolver\OptionsResolverInterface;

use Acme\DemoBundle\Form\Listener\ProfileFormListener;

/**
 * Profile Form Type
 *
 */
class ProfileFormType extends AbstractType
{
    /**
     * {@inheritdoc}
     */
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder->addEventSubscriber(new ProfileFormListener());
    }

    /**
     * {@inheritdoc}
     */
    public function setDefaultOptions(OptionsResolverInterface $resolver)
    {
        $resolver->setDefaults(array(
            'data_class' => 'Acme\DemoBundle\Form\Model\ProfileFormModel',
            'label'      => ' ',
        ));
    }

    /**
     * {@inheritdoc}
     */
    public function getName()
    {
        return 'acme_demo_profile_form';
    }
}
