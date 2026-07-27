<?php

declare(strict_types=1);

namespace Tests;

use JamesKingDev\TwentyI\Requests\ManagedVps\GetManagedVps;
use JamesKingDev\TwentyI\Requests\ManagedVps\ListManagedVps;
use Saloon\Http\Faking\MockClient;
use Saloon\Http\Faking\MockResponse;

class ManagedVpsTest extends TestCase
{
    public function testListManagedVpsReturnsCorrectResponse(): void
    {
        $expectedResponse = [
            'managedVps' => [
                ['id' => 1, 'name' => 'managed-vps-1', 'status' => 'active'],
            ],
        ];

        $this->mockClient = MockClient::global([
            ListManagedVps::class => MockResponse::make($expectedResponse, 200),
        ]);

        $this->connector->withMockClient($this->mockClient);

        $response = $this->connector->managedVps()->listManagedVps();

        $this->assertEquals(200, $response->status());
        $this->assertEquals($expectedResponse, $response->json());
    }

    public function testGetManagedVpsReturnsCorrectResponse(): void
    {
        $managedVpsId = 456;
        $expectedResponse = [
            'id' => $managedVpsId,
            'name' => 'my-managed-vps',
            'status' => 'active',
            'packages' => 5,
        ];

        $this->mockClient = MockClient::global([
            GetManagedVps::class => MockResponse::make($expectedResponse, 200),
        ]);

        $this->connector->withMockClient($this->mockClient);

        $response = $this->connector->managedVps()->getManagedVps($managedVpsId);

        $this->assertEquals(200, $response->status());
        $this->assertEquals($expectedResponse, $response->json());

        $this->mockClient->assertSent(GetManagedVps::class);
    }

    public function testLimitsReturnsCorrectResponse(): void
    {
        $managedVpsId = 456;
        $expectedResponse = [
            'packages' => ['used' => 5, 'limit' => 10],
            'domains' => ['used' => 20, 'limit' => 50],
        ];

        $this->mockClient = MockClient::global([
            \JamesKingDev\TwentyI\Requests\ManagedVps\Limits::class => MockResponse::make($expectedResponse, 200),
        ]);

        $this->connector->withMockClient($this->mockClient);

        $response = $this->connector->managedVps()->limits($managedVpsId);

        $this->assertEquals(200, $response->status());
        $this->assertEquals($expectedResponse, $response->json());
    }
}
