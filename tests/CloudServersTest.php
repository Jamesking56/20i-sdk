<?php

declare(strict_types=1);

namespace Tests;

use JamesKingDev\TwentyI\Requests\CloudServers\ListServerProviders;
use Saloon\Http\Faking\MockClient;
use Saloon\Http\Faking\MockResponse;

class CloudServersTest extends TestCase
{
    public function testListServerProvidersReturnsCorrectResponse(): void
    {
        $expectedResponse = [
            'providers' => [
                ['id' => 'aws', 'name' => 'Amazon Web Services'],
                ['id' => 'do', 'name' => 'DigitalOcean'],
            ],
        ];

        $this->mockClient = MockClient::global([
            ListServerProviders::class => MockResponse::make($expectedResponse, 200),
        ]);

        $this->connector->withMockClient($this->mockClient);

        $response = $this->connector->cloudServers()->listServerProviders();

        $this->assertEquals(200, $response->status());
        $this->assertEquals($expectedResponse, $response->json());
    }

    public function testServerProductSpecsReturnsCorrectResponse(): void
    {
        $provider = 'aws';
        $expectedResponse = [
            'products' => [
                ['id' => 't3.micro', 'name' => 'T3 Micro', 'price' => 0.01],
            ],
        ];

        $this->mockClient = MockClient::global([
            \JamesKingDev\TwentyI\Requests\CloudServers\ServerProductSpecs::class => MockResponse::make($expectedResponse, 200),
        ]);

        $this->connector->withMockClient($this->mockClient);

        $response = $this->connector->cloudServers()->serverProductSpecs($provider);

        $this->assertEquals(200, $response->status());
        $this->assertEquals($expectedResponse, $response->json());
    }

    public function testTimelineUpgradesReturnsCorrectResponse(): void
    {
        $serverId = 123;
        $expectedResponse = [
            'upgrades' => [
                ['id' => 'u1', 'from' => 't3.micro', 'to' => 't3.small'],
            ],
        ];

        $this->mockClient = MockClient::global([
            \JamesKingDev\TwentyI\Requests\CloudServers\TimelineUpgrades::class => MockResponse::make($expectedResponse, 200),
        ]);

        $this->connector->withMockClient($this->mockClient);

        $response = $this->connector->cloudServers()->timelineUpgrades($serverId);

        $this->assertEquals(200, $response->status());
        $this->assertEquals($expectedResponse, $response->json());
    }
}
