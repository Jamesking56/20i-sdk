<?php
/* GENERATED FILE - Do not edit directly */

declare(strict_types=1);

namespace JamesKingDev\TwentyI\Requests\ManagedVps;

use Saloon\Enums\Method;
use Saloon\Http\Request;

/**
 * Get Managed VPS.
 */
class GetManagedVps extends Request
{
    protected Method $method = Method::GET;

    public function __construct(
        protected float|int $managedVpsId,
    ) {
    }

    public function resolveEndpoint(): string
    {
        return "/managed_vps/{$this->managedVpsId}";
    }
}
