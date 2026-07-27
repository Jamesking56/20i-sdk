<?php

declare(strict_types=1);

namespace Tests;

use JamesKingDev\TwentyI\Requests\MssqlDatabases\ListDatabases;
use JamesKingDev\TwentyI\Requests\MssqlDatabases\RetrieveDatabase;
use Saloon\Http\Faking\MockClient;
use Saloon\Http\Faking\MockResponse;

class MssqlDatabasesTest extends TestCase
{
    public function testListDatabasesReturnsCorrectResponse(): void
    {
        $expectedResponse = [
            'databases' => [
                ['id' => 'db-1', 'name' => 'database1'],
                ['id' => 'db-2', 'name' => 'database2'],
            ],
        ];

        $this->mockClient = MockClient::global([
            ListDatabases::class => MockResponse::make($expectedResponse, 200),
        ]);

        $this->connector->withMockClient($this->mockClient);

        $response = $this->connector->mssqlDatabases()->listDatabases();

        $this->assertEquals(200, $response->status());
        $this->assertEquals($expectedResponse, $response->json());
    }

    public function testRetrieveDatabaseReturnsCorrectResponse(): void
    {
        $databaseId = 'db-123';
        $expectedResponse = [
            'id' => $databaseId,
            'name' => 'mydb',
            'size' => '1GB',
            'server' => 'mssql-1',
        ];

        $this->mockClient = MockClient::global([
            RetrieveDatabase::class => MockResponse::make($expectedResponse, 200),
        ]);

        $this->connector->withMockClient($this->mockClient);

        $response = $this->connector->mssqlDatabases()->retrieveDatabase($databaseId);

        $this->assertEquals(200, $response->status());
        $this->assertEquals($expectedResponse, $response->json());

        $this->mockClient->assertSent(RetrieveDatabase::class);
    }
}
