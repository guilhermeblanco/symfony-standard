<?php

namespace Acme\DemoBundle\Controller;

use Doctrine\Common\Collections\ArrayCollection;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

// these import the "@Route" and "@Template" annotations
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Template;

use Acme\DemoBundle\Form\Model\ProfileFormModel;
use Acme\DemoBundle\Form\Model\ProfileListFormModel;

class IssueController extends Controller
{
    /**
     * @Route("/", name="_issue")
     * @Template()
     */
    public function indexAction()
    {
        $formModel = $this->getComponentFormModel();
        $form      = $this->getComponentForm($formModel);

        return array('form' => $form->createView());
    }

    private function getComponentForm($componentFormModel)
    {
        $form = $this->container->get('acme.demo.form.profile_list');

        $form->setData($componentFormModel);

        return $form;
    }

    private function getComponentFormModel()
    {
        $profileList = new ArrayCollection();

        $profile = new ProfileFormModel();
        $profile->setName('Foo');
        $profileList->add($profile);

        $profile = new ProfileFormModel();
        $profile->setName('Bar');
        $profileList->add($profile);

        return new ProfileListFormModel($profileList);
    }
}