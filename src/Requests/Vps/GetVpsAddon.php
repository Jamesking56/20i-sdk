<?php

declare(strict_types=1);

namespace JamesKingDev\TwentyI\Requests\Vps;

use Saloon\Enums\Method;
use Saloon\Http\Request;

class GetVpsAddon extends Request
{
    protected Method $method = Method::GET;

    public function __construct(
        protected readonly float|int $vpsId,
        protected readonly float|int $addonId,
    ) {
    }

    public function resolveEndpoint(): string
    {
        return "/vps/{$this->vpsId}/addon/{$this->addonId}";
    }
}
