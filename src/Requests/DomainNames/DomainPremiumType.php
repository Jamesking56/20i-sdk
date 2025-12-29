<?php
/* GENERATED FILE - Do not edit directly */

declare(strict_types=1);

namespace JamesKingDev\TwentyI\Requests\DomainNames;

use Saloon\Enums\Method;
use Saloon\Http\Request;

/**
 * Domain Premium Type.
 */
class DomainPremiumType extends Request
{
    protected Method $method = Method::GET;

    public function __construct()
    {
    }

    public function resolveEndpoint(): string
    {
        return '/domainPremiumType';
    }
}
