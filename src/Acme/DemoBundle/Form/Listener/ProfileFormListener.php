<?php

namespace Acme\DemoBundle\Form\Listener;

use Symfony\Component\EventDispatcher\EventSubscriberInterface;

use Symfony\Component\Form\FormEvent;
use Symfony\Component\Form\FormEvents;

/**
 * Profile Form Listener
 *
 */
class ProfileFormListener implements EventSubscriberInterface
{
    /**
     * {@inheritdoc}
     */
    public static function getSubscribedEvents()
    {
        return array(FormEvents::PRE_SET_DATA => 'preSetData');
    }

    /**
     * This method gets executed when a form event called "pre set data" is called.
     * This means that we get to dynamically set the form's rendering type.
     *
     * @param \Symfony\Component\Form\FormEvent $event
     */
    public function preSetData(FormEvent $event)
    {
        $data = $event->getData();
        $form = $event->getForm();

        if (null === $data) {
            return;
        }

        echo '<pre>';
        \Doctrine\Common\Util\Debug::dump($data);
        echo '</pre>';
    }
}
