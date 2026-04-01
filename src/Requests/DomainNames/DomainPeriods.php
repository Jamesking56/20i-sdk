<?php

declare(strict_types=1);

namespace JamesKingDev\TwentyI\Requests\DomainNames;

use Saloon\Enums\Method;
use Saloon\Http\Request;

class DomainPeriods extends Request
{
    protected Method $method = Method::GET;

    public function resolveEndpoint(): string
    {
        return '/domain-periods';
    }
}
