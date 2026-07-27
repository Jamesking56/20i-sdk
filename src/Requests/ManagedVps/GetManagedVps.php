<?php

declare(strict_types=1);

namespace JamesKingDev\TwentyI\Requests\ManagedVps;

use Saloon\Enums\Method;
use Saloon\Http\Request;

class GetManagedVps extends Request
{
    protected Method $method = Method::GET;

    public function __construct(
        protected readonly float|int $managedVpsId,
    ) {
    }

    public function resolveEndpoint(): string
    {
        return "/managedVPS/{$this->managedVpsId}";
    }
}
