<?php
/* GENERATED FILE - Do not edit directly */

declare(strict_types=1);

namespace JamesKingDev\TwentyI\Requests\Packages;

use Saloon\Enums\Method;
use Saloon\Http\Request;

/**
 * Transfers EPP Code.
 */
class TransfersEppCode extends Request
{
    protected Method $method = Method::GET;

    public function __construct(
        protected float|int $packageId,
        protected float|int $domainId,
    ) {
    }

    public function resolveEndpoint(): string
    {
        return "/package/{$this->packageId}/domain/{$this->domainId}/authCode";
    }
}
