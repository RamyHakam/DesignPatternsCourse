<?php


namespace Structural\AdapterThirdPartyExample;


use TokenAuth\TokenAuthenticator;

class TokenAuthAdapter implements AuthenticatorInterface
{
    /**
     * @var TokenAuthenticator
     */
    private $authenticator;

    public function __construct(TokenAuthenticator $authenticator)
    {
        $this->authenticator = $authenticator;
    }

    public function login(array $params)
    {
       return $this->authenticator->tokenLogin($params['key'],$params['token']);
    }
}