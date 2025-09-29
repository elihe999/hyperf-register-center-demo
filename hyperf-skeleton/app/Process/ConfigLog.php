<?php

declare(strict_types=1);

namespace App\Process;

use Hyperf\Process\AbstractProcess;
use Hyperf\Contract\ConfigInterface;
use Hyperf\Context\ApplicationContext;
use Hyperf\DbConnection\Db;
use Hyperf\Process\Annotation\Process;
use Hyperf\Tracer\Annotation\Trace;

#[Trace]
#[Process(name: 'ConfigLog')]
class ConfigLog extends AbstractProcess
{
    public function handle(): void
    {
        $config = ApplicationContext::getContainer()->get(ConfigInterface::class);
        var_dump('ConfigLog start');
        \var_dump($config->get('nacos_config.text_test'));
        Db::table('users')->get();
    }
}
