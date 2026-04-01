<?php

declare(strict_types=1);

namespace JamesKingDev\TwentyI\Requests\Vps;

use Saloon\Enums\Method;
use Saloon\Http\Request;

class Vps extends Request
{
    protected Method $method = Method::GET;

    public function resolveEndpoint(): string
    {
        return '/vps';
    }
}
