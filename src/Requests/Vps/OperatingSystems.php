<?php
/* GENERATED FILE - Do not edit directly */

declare(strict_types=1);

namespace JamesKingDev\TwentyI\Requests\Vps;

use Saloon\Enums\Method;
use Saloon\Http\Request;

/**
 * Operating Systems.
 */
class OperatingSystems extends Request
{
    protected Method $method = Method::GET;

    public function __construct(
        protected float|int $vpsId,
    ) {
    }

    public function resolveEndpoint(): string
    {
        return "/vps/{$this->vpsId}/rebuildOperatingSystems";
    }
}
