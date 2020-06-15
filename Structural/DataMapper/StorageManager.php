<?php


namespace Structural\DataMapper;


class StorageManager
{
    private array $data = [];

    public function __construct(array $data)
    {
        $this->data = $data;
    }

    public function  find(string $id)
    {
        return $this->data[$id];
    }

    public function save(array $user): bool
    {
        $this->data [] = $user;
        return true;
    }

}