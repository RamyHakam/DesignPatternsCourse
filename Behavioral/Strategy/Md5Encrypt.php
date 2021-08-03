<?php

namespace Behavioral\Strategy;

class Md5Encrypt implements StrategyInterface
{
    public const TYPE = "Md5";

    public function encrypt(string $data): array
    {
        return  [md5($data),self::TYPE];
    }
}