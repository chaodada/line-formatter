<?php

declare(strict_types=1);
/**
 * This file is part of Hyperf.
 *
 * @link     https://www.hyperf.io
 * @document https://doc.hyperf.io
 * @contact  group@hyperf.io
 * @license  https://github.com/hyperf/hyperf/blob/master/LICENSE
 */
namespace ZenStudio\LineFormatter;

class ConfigProvider
{
    public function __invoke(): array
    {
        return [
            'dependencies' => [
                \Monolog\Formatter\LineFormatter::class => LineFormatter::class,
                \Monolog\Formatter\JsonFormatter::class => JsonFormatter::class
            ],
            'commands' => [
            ],
            'annotations' => [
                'scan' => [
                    'paths' => [
                        __DIR__,
                    ],
                ],
            ],
        ];
    }
}
