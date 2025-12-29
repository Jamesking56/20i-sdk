<?php
/* GENERATED FILE - Do not edit directly */

declare(strict_types=1);

namespace JamesKingDev\TwentyI\Requests\MssqlDatabases;

use Saloon\Contracts\Body\HasBody;
use Saloon\Enums\Method;
use Saloon\Http\Request;
use Saloon\Traits\Body\HasJsonBody;

/**
 * Assign Database.
 */
class AssignDatabase extends Request implements HasBody
{
    use HasJsonBody;

    protected Method $method = Method::POST;

    public function __construct(
        protected float|int $mssqlId,
    ) {
    }

    public function resolveEndpoint(): string
    {
        return "/mssql/{$this->mssqlId}/package";
    }
}
