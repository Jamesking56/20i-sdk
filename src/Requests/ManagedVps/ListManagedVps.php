<?php

declare(strict_types=1);

namespace JamesKingDev\TwentyI\Requests\ManagedVps;

use Saloon\Enums\Method;
use Saloon\Http\Request;

class ListManagedVps extends Request
{
    protected Method $method = Method::GET;

    public function resolveEndpoint(): string
    {
        return '/managedVPS';
    }
}
