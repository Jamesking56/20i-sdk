<?php

// GENERATED FILE - Do not edit directly

declare(strict_types=1);

namespace JamesKingDev\TwentyI\Requests\Packages;

use Saloon\Enums\Method;
use Saloon\Http\Request;

/**
 * Php Config.
 */
class PhpConfig extends Request
{
    protected Method $method = Method::GET;

    public function __construct(
        protected float|int $packageId,
        protected float|int $phpConfigId,
    ) {
    }

    public function resolveEndpoint(): string
    {
        return "/package/{$this->packageId}/web/phpConfig/{$this->phpConfigId}";
    }
}
