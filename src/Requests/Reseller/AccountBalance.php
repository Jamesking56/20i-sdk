<?php
/* GENERATED FILE - Do not edit directly */

declare(strict_types=1);

namespace JamesKingDev\TwentyI\Requests\Reseller;

use Saloon\Enums\Method;
use Saloon\Http\Request;

/**
 * Account Balance.
 */
class AccountBalance extends Request
{
    protected Method $method = Method::GET;

    public function __construct(
        protected float|int $resellerId,
    ) {
    }

    public function resolveEndpoint(): string
    {
        return "/reseller/{$this->resellerId}/accountBalance";
    }
}
