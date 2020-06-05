<?php


namespace TokenAuth;


class TokenAuthenticator
{
    public function tokenLogin(string $key, string $token)
    {
        return base64_encode($token .'-'.$key);
    }
}