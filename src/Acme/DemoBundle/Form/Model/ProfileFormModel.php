<?php

namespace Acme\DemoBundle\Form\Model;

/**
 * Profile Form Model
 *
 */
class ProfileFormModel
{
    /**
     * @var string
     */
    protected $name;

    /**
     * Retrieve the name
     *
     * @return string
     */
    public function getName()
    {
        return $this->name;
    }

    /**
     * Define the name
     *
     * @param string $name
     */
    public function setName($name)
    {
        $this->name = $name;
    }
}