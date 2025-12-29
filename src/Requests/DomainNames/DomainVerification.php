<?php
/* GENERATED FILE - Do not edit directly */

declare(strict_types=1);

namespace JamesKingDev\TwentyI\Requests\DomainNames;

use Saloon\Enums\Method;
use Saloon\Http\Request;

/**
 * Domain Verification.
 */
class DomainVerification extends Request
{
    protected Method $method = Method::GET;

    public function __construct()
    {
    }

    public function resolveEndpoint(): string
    {
        return '/domainVerification';
    }
}
