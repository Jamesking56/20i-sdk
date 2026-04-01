<?php

declare(strict_types=1);

namespace JamesKingDev\TwentyI\Requests\CloudServers;

use Saloon\Contracts\Body\HasBody;
use Saloon\Enums\Method;
use Saloon\Traits\Body\HasJsonBody;

class UpgradeServer implements HasBody
{
    use HasJsonBody;

    protected Method $method = Method::POST;

    public function __construct(
        protected readonly float|int $serverId,
    ) {
    }

    public function resolveEndpoint(): string
    {
        return "/cloudServer/{$this->serverId}/upgrade";
    }
}
