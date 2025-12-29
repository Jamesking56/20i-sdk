<?php
/* GENERATED FILE - Do not edit directly */

declare(strict_types=1);

namespace JamesKingDev\TwentyI\Requests\Packages;

use Saloon\Enums\Method;
use Saloon\Http\Request;

/**
 * Package Type Limits.
 */
class PackageTypeLimits extends Request
{
    protected Method $method = Method::GET;

    public function __construct(
        protected float|int $packageId,
    ) {
    }

    public function resolveEndpoint(): string
    {
        return "/package/{$this->packageId}/bundleType/limits";
    }
}
