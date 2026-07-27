<?php

declare(strict_types=1);

namespace JamesKingDev\TwentyI\Resource;

use JamesKingDev\TwentyI\Requests\MssqlDatabases\AssignDatabase;
use JamesKingDev\TwentyI\Requests\MssqlDatabases\ListDatabases;
use JamesKingDev\TwentyI\Requests\MssqlDatabases\RetrieveDatabase;
use Saloon\Http\BaseResource;
use Saloon\Http\Response;

class MssqlDatabases extends BaseResource
{
    public function assignDatabase(float|int $packageId): Response
    {
        return $this->connector->send(new AssignDatabase($packageId));
    }

    public function listDatabases(): Response
    {
        return $this->connector->send(new ListDatabases());
    }

    public function retrieveDatabase(string $databaseId): Response
    {
        return $this->connector->send(new RetrieveDatabase($databaseId));
    }
}
