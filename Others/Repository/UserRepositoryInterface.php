<?php

namespace Others\Repository;

interface UserRepositoryInterface
{
    public function find(int $id) :User;
    public function save(User $user) :bool;
    public function remove(int $user) :bool;
}