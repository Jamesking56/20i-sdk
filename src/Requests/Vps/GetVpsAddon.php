<?php
/* GENERATED FILE - Do not edit directly */

declare(strict_types=1);

namespace JamesKingDev\TwentyI\Requests\Vps;

use Saloon\Enums\Method;
use Saloon\Http\Request;

/**
 * getVpsAddon.
 */
class GetVpsAddon extends Request
{
    protected Method $method = Method::GET;

    public function __construct(
        protected float|int $vpsId,
        protected float|int $addonId,
    ) {
    }

    public function resolveEndpoint(): string
    {
        return "/vps/{$this->vpsId}/addon/{$this->addonId}";
    }
}
