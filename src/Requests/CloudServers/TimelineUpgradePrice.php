<?php

declare(strict_types=1);

namespace JamesKingDev\TwentyI\Requests\CloudServers;

use Saloon\Enums\Method;
use Saloon\Http\Request;

class TimelineUpgradePrice extends Request
{
    protected Method $method = Method::GET;

    public function __construct(
        protected readonly float|int $serverId,
    ) {
    }

    public function resolveEndpoint(): string
    {
        return "/cloudServer/{$this->serverId}/timelineUpgrade/price";
    }
}
