<?php

declare(strict_types=1);

namespace App\JsonRpc\Interfaces;

interface CalculatorServiceInterface
{
    public function add(int $a, int $b): int;
}
