<?php

declare(strict_types=1);

namespace App\JsonRpc;

use Hyperf\RpcClient\AbstractServiceClient;
use App\JsonRpc\Interfaces\CalculatorServiceInterface;

class CalculatorServiceConsumer extends AbstractServiceClient implements CalculatorServiceInterface
{
    /**
     * 定义对应服务提供者的服务名称
     */
    protected string $serviceName = 'CalculatorService';
    /**
     * 定义对应服务提供者的服务协议
     */
    protected string $protocol = 'jsonrpc-http';
    public function add(int $a, int $b): int
    {
        return $this->__request(__FUNCTION__, compact('a', 'b'));
    }
}