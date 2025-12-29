<?php
/* GENERATED FILE - Do not edit directly */

declare(strict_types=1);

namespace JamesKingDev\TwentyI\Requests\ManagedVps;

use Saloon\Contracts\Body\HasBody;
use Saloon\Enums\Method;
use Saloon\Http\Request;
use Saloon\Traits\Body\HasJsonBody;

/**
 * Delete Package.
 */
class DeletePackage extends Request implements HasBody
{
    use HasJsonBody;

    protected Method $method = Method::POST;

    public function __construct(
        protected float|int $managedVpsId,
    ) {
    }

    public function resolveEndpoint(): string
    {
        return "/managed_vps/{$this->managedVpsId}/deleteWeb";
    }
}
