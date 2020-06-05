<?php


namespace Structural\AdapterThirdPartyExample;


interface AuthenticatorInterface
{
    public function login(array $params);
}