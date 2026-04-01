<?php

declare(strict_types=1);

namespace JamesKingDev\TwentyI\Requests\Vps;

use Saloon\Contracts\Body\HasBody;
use Saloon\Enums\Method;
use Saloon\Traits\Body\HasJsonBody;

class Shutdown implements HasBody
{
    use HasJsonBody;

    protected Method $method = Method::POST;

    public function __construct(
        protected readonly float|int $vpsId,
    ) {
    }

    public function resolveEndpoint(): string
    {
        return "/vps/{$this->vpsId}/shutdown";
    }
}
