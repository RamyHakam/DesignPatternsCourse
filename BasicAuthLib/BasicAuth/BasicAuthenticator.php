<?php


namespace BasicAuth;


class BasicAuthenticator
{
    public function basicLogin(string $username, string $password)
    {
        return $username .'-'.$password;
    }
}