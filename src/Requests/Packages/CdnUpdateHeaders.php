<?php
/* GENERATED FILE - Do not edit directly */

declare(strict_types=1);

namespace JamesKingDev\TwentyI\Requests\Packages;

use Saloon\Contracts\Body\HasBody;
use Saloon\Enums\Method;
use Saloon\Http\Request;
use Saloon\Traits\Body\HasJsonBody;

/**
 * CDN Update Headers.
 */
class CdnUpdateHeaders extends Request implements HasBody
{
    use HasJsonBody;

    protected Method $method = Method::POST;

    public function __construct(
        protected float|int $packageId,
    ) {
    }

    public function resolveEndpoint(): string
    {
        return "/package/{$this->packageId}/web/updateCdnSecurityHeaders";
    }
}
