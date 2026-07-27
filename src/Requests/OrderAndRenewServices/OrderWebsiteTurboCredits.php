<?php

declare(strict_types=1);

namespace JamesKingDev\TwentyI\Requests\OrderAndRenewServices;

use Saloon\Contracts\Body\HasBody;
use Saloon\Enums\Method;
use Saloon\Http\Request;
use Saloon\Traits\Body\HasJsonBody;

class OrderWebsiteTurboCredits extends Request implements HasBody
{
    use HasJsonBody;

    protected Method $method = Method::POST;

    public function __construct(
        protected readonly float|int $resellerId,
    ) {
    }

    public function resolveEndpoint(): string
    {
        return "/reseller/{$this->resellerId}/order/websiteTurboCredits";
    }
}
