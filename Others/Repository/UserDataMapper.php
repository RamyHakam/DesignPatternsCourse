<?php

namespace Others\Repository;

class UserDataMapper
{
    public static function domainToData(User $user): array
    {
        return  [
            'name' => $user->getName(),
            'email' => $user->getEmail(),
            'password' => $user->getPassword()
        ];
    }

    public static function dataToDomain(array $data) :User
    {
         $user = new User();
         return  $user->setEmail($data['email'])
            ->setName($data['name'])
            ->setPassword($data['password']);
    }
}