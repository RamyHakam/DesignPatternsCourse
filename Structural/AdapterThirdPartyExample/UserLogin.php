<?php


namespace Structural\AdapterThirdPartyExample;


use BasicAuth\BasicAuthenticator;

class UserLogin
{
    /**
     * @var AuthenticatorInterface
     */
    private $authenticator;

    public function __construct(AuthenticatorInterface $authenticator)
    {
        $this->authenticator = $authenticator;
    }

    public function login(array $params)
    {
        return $this->authenticator->login($params);
    }
}