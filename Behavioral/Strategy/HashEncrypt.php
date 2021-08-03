<?php

namespace Behavioral\Strategy;

class HashEncrypt  implements StrategyInterface
{
    public const TYPE = "Hash";

    public function encrypt(string $data): array
    {
       return [hash('sha256',$data),self::TYPE];
    }
}