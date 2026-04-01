<?php

declare(strict_types=1);

namespace JamesKingDev\TwentyI\Requests\CloudServers;

use Saloon\Enums\Method;
use Saloon\Http\Request;

class ListServerProviders extends Request
{
    protected Method $method = Method::GET;

    public function resolveEndpoint(): string
    {
        return '/cloudServer/providers';
    }
}
