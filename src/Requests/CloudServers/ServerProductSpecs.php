<?php
/* GENERATED FILE - Do not edit directly */

declare(strict_types=1);

namespace JamesKingDev\TwentyI\Requests\CloudServers;

use Saloon\Enums\Method;
use Saloon\Http\Request;

/**
 * Server Product Specs.
 */
class ServerProductSpecs extends Request
{
    protected Method $method = Method::GET;

    public function __construct(
        protected float|int $resellerId,
    ) {
    }

    public function resolveEndpoint(): string
    {
        return "/reseller/{$this->resellerId}/cloudServerProductData";
    }
}
