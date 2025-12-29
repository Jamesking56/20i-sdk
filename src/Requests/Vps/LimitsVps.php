<?php
/* GENERATED FILE - Do not edit directly */

declare(strict_types=1);

namespace JamesKingDev\TwentyI\Requests\Vps;

use Saloon\Contracts\Body\HasBody;
use Saloon\Enums\Method;
use Saloon\Http\Request;
use Saloon\Traits\Body\HasJsonBody;

/**
 * Limits vps.
 */
class LimitsVps extends Request implements HasBody
{
    use HasJsonBody;

    protected Method $method = Method::POST;

    public function __construct(
        protected float|int $vpsId,
    ) {
    }

    public function resolveEndpoint(): string
    {
        return "/vps/{$this->vpsId}/limits";
    }
}
