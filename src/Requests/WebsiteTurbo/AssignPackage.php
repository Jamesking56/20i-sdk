<?php
/* GENERATED FILE - Do not edit directly */

declare(strict_types=1);

namespace JamesKingDev\TwentyI\Requests\WebsiteTurbo;

use Saloon\Contracts\Body\HasBody;
use Saloon\Enums\Method;
use Saloon\Http\Request;
use Saloon\Traits\Body\HasJsonBody;

/**
 * Assign Package.
 */
class AssignPackage extends Request implements HasBody
{
    use HasJsonBody;

    protected Method $method = Method::POST;

    public function __construct(
        protected float|int $websiteTurboId,
    ) {
    }

    public function resolveEndpoint(): string
    {
        return "/website_turbo/{$this->websiteTurboId}/assignPackage";
    }
}
