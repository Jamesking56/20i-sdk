<?php
/* GENERATED FILE - Do not edit directly */

declare(strict_types=1);

namespace JamesKingDev\TwentyI\Resource;

use JamesKingDev\TwentyI\Requests\MssqlDatabases\AssignDatabase;
use JamesKingDev\TwentyI\Requests\MssqlDatabases\ListDatabases;
use JamesKingDev\TwentyI\Requests\MssqlDatabases\RetrieveDatabase;
use Saloon\Http\BaseResource;
use Saloon\Http\Response;

class MssqlDatabases extends BaseResource
{
    public function assignDatabase(float|int $mssqlId): Response
    {
        return $this->connector->send(new AssignDatabase($mssqlId));
    }

    public function listDatabases(): Response
    {
        return $this->connector->send(new ListDatabases());
    }

    public function retrieveDatabase(float|int $mssqlId): Response
    {
        return $this->connector->send(new RetrieveDatabase($mssqlId));
    }
}
