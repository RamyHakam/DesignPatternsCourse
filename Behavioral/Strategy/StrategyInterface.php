<?php

namespace Behavioral\Strategy;

Interface StrategyInterface
{
    public function encrypt(string $data): array;
}