<?php

declare(strict_types=1);

namespace JamesKingDev\TwentyI\Requests\WebsiteTurbo;

use Saloon\Enums\Method;
use Saloon\Http\Request;

class ListWebsiteTurbo extends Request
{
    protected Method $method = Method::GET;

    public function resolveEndpoint(): string
    {
        return '/websiteTurbo';
    }
}
