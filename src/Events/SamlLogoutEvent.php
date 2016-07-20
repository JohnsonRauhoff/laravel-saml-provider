<?php namespace CharlesRumley\Saml\Events;

use CharlesRumley\Saml\User;

class SamlLogoutEvent
{

    /**
     * @var User
     */
    protected $user;

    function __construct(User $user)
    {
        $this->user = $user;
    }

    public function user()
    {
        return $this->user;
    }

}