<?php
/* GENERATED FILE - Do not edit directly */

declare(strict_types=1);

namespace JamesKingDev\TwentyI\Requests\MssqlDatabases;

use Saloon\Enums\Method;
use Saloon\Http\Request;

/**
 * Retrieve Database.
 */
class RetrieveDatabase extends Request
{
    protected Method $method = Method::GET;

    public function __construct(
        protected float|int $mssqlId,
    ) {
    }

    public function resolveEndpoint(): string
    {
        return "/mssql/{$this->mssqlId}";
    }
}
