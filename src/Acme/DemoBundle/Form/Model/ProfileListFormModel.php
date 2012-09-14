<?php

namespace Acme\DemoBundle\Form\Model;

use Doctrine\Common\Collections\Collection;

/**
 * Profile List Form Model
 *
 */
class ProfileListFormModel
{
    /**
     * @var \Doctrine\Common\Collections\Collection
     */
    private $profileList;

    /**
     * Constructor.
     *
     * @param \Doctrine\Common\Collections\Collection $profileList
     */
    public function __construct(Collection $profileList)
    {
        $this->profileList = $profileList;
    }

    /**
     * Retrieve the Profile list.
     *
     * @return \Doctrine\Common\Collections\Collection
     */
    public function getProfileList()
    {
        return $this->profileList;
    }
}
