<?php

declare(strict_types=1);

namespace JamesKingDev\TwentyI\Requests\WebsiteTurbo;

use Saloon\Contracts\Body\HasBody;
use Saloon\Enums\Method;
use Saloon\Traits\Body\HasJsonBody;

class UnassignPackage implements HasBody
{
    use HasJsonBody;

    protected Method $method = Method::POST;

    public function __construct(
        protected readonly float|int $packageId,
    ) {
    }

    public function resolveEndpoint(): string
    {
        return "/package/{$this->packageId}/websiteTurbo/unassign";
    }
}
