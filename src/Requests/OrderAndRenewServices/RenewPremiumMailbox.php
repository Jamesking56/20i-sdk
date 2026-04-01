<?php

declare(strict_types=1);

namespace JamesKingDev\TwentyI\Requests\OrderAndRenewServices;

use Saloon\Contracts\Body\HasBody;
use Saloon\Enums\Method;
use Saloon\Traits\Body\HasJsonBody;

class RenewPremiumMailbox implements HasBody
{
    use HasJsonBody;

    protected Method $method = Method::POST;

    public function __construct(
        protected readonly float|int $resellerId,
    ) {
    }

    public function resolveEndpoint(): string
    {
        return "/reseller/{$this->resellerId}/renew/premiumMailbox";
    }
}
