<?php
/* GENERATED FILE - Do not edit directly */

declare(strict_types=1);

namespace JamesKingDev\TwentyI\Requests\WebsiteTurbo;

use Saloon\Enums\Method;
use Saloon\Http\Request;

/**
 * List Website Turbo.
 */
class ListWebsiteTurbo extends Request
{
    protected Method $method = Method::GET;

    public function __construct()
    {
    }

    public function resolveEndpoint(): string
    {
        return '/website_turbo';
    }
}
