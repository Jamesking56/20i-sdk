<?php

declare(strict_types=1);

namespace JamesKingDev\TwentyI\Requests\MssqlDatabases;

use Saloon\Contracts\Body\HasBody;
use Saloon\Enums\Method;
use Saloon\Traits\Body\HasJsonBody;

class AssignDatabase implements HasBody
{
    use HasJsonBody;

    protected Method $method = Method::POST;

    public function __construct(
        protected readonly float|int $packageId,
    ) {
    }

    public function resolveEndpoint(): string
    {
        return "/package/{$this->packageId}/mssql/add";
    }
}
