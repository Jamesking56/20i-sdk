<?php

declare(strict_types=1);

use Rector\Config\RectorConfig;
use Rector\Custom\RemoveDuplicateTodoMethodsRector;

return RectorConfig::configure()
    ->withPaths([
        __DIR__ . '/src',
    ])
    ->withPhpSets()
    ->withTypeCoverageLevel(0)
    ->withDeadCodeLevel(0)
    ->withCodeQualityLevel(0)
    ->withRules([
        RemoveDuplicateTodoMethodsRector::class,
    ]);
