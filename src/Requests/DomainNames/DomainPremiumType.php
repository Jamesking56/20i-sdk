<?php

declare(strict_types=1);

namespace JamesKingDev\TwentyI\Requests\DomainNames;

use Saloon\Enums\Method;
use Saloon\Http\Request;

class DomainPremiumType extends Request
{
    protected Method $method = Method::GET;

    public function resolveEndpoint(): string
    {
        return '/domain-premium-type';
    }
}
