<?php
/* GENERATED FILE - Do not edit directly */

declare(strict_types=1);

namespace JamesKingDev\TwentyI\Requests\Reseller;

use Saloon\Enums\Method;
use Saloon\Http\Request;

/**
 * Stack User grants.
 */
class StackUserGrants extends Request
{
    protected Method $method = Method::GET;

    public function __construct(
        protected float|int $resellerId,
        protected string $stackUserId,
    ) {
    }

    public function resolveEndpoint(): string
    {
        return "/reseller/{$this->resellerId}/stackUser/{$this->stackUserId}/grants";
    }
}
