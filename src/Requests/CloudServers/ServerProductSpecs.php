<?php

declare(strict_types=1);

namespace JamesKingDev\TwentyI\Requests\CloudServers;

use Saloon\Enums\Method;
use Saloon\Http\Request;

class ServerProductSpecs extends Request
{
    protected Method $method = Method::GET;

    public function __construct(
        protected readonly string $provider,
    ) {
    }

    public function resolveEndpoint(): string
    {
        return "/cloudServer/providers/{$this->provider}/products";
    }
}
