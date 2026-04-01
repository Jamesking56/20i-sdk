<?php

declare(strict_types=1);

namespace JamesKingDev\TwentyI\Requests\Reseller;

use Saloon\Enums\Method;
use Saloon\Http\Request;

class ListPremiumMailboxes extends Request
{
    protected Method $method = Method::GET;

    public function resolveEndpoint(): string
    {
        return '/reseller/premiumMailbox';
    }
}
