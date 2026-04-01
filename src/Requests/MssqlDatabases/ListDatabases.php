<?php

declare(strict_types=1);

namespace JamesKingDev\TwentyI\Requests\MssqlDatabases;

use Saloon\Enums\Method;
use Saloon\Http\Request;

class ListDatabases extends Request
{
    protected Method $method = Method::GET;

    public function resolveEndpoint(): string
    {
        return '/mssql';
    }
}
