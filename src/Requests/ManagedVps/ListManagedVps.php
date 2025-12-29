<?php
/* GENERATED FILE - Do not edit directly */

declare(strict_types=1);

namespace JamesKingDev\TwentyI\Requests\ManagedVps;

use Saloon\Enums\Method;
use Saloon\Http\Request;

/**
 * List Managed VPS.
 */
class ListManagedVps extends Request
{
    protected Method $method = Method::GET;

    public function __construct()
    {
    }

    public function resolveEndpoint(): string
    {
        return '/managed_vps';
    }
}
