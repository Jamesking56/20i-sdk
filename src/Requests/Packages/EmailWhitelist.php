<?php
/* GENERATED FILE - Do not edit directly */

declare(strict_types=1);

namespace JamesKingDev\TwentyI\Requests\Packages;

use Saloon\Enums\Method;
use Saloon\Http\Request;

/**
 * Email Whitelist.
 */
class EmailWhitelist extends Request
{
    protected Method $method = Method::GET;

    public function __construct(
        protected float|int $packageId,
        protected float|int $emailId,
    ) {
    }

    public function resolveEndpoint(): string
    {
        return "/package/{$this->packageId}/email/{$this->emailId}/spamPolicyListWhitelist";
    }
}
