<?php

namespace Others\Repository;

abstract class EntityRepository
{
    private string $entityClassName;

    public function __construct(string $entityClassName = null)
    {
        $this->entityClassName = $entityClassName;
    }
}