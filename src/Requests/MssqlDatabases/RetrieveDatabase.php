<?php

declare(strict_types=1);

namespace JamesKingDev\TwentyI\Requests\MssqlDatabases;

use Saloon\Enums\Method;
use Saloon\Http\Request;

class RetrieveDatabase extends Request
{
    protected Method $method = Method::GET;

    public function __construct(
        protected readonly string $databaseId,
    ) {
    }

    public function resolveEndpoint(): string
    {
        return "/mssql/{$this->databaseId}";
    }
}
