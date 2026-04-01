<?php

declare(strict_types=1);

namespace Tests;

use JamesKingDev\TwentyI\Requests\Vps\ActivateDeactivateVps;
use JamesKingDev\TwentyI\Requests\Vps\GetVps;
use JamesKingDev\TwentyI\Requests\Vps\Reboot;
use JamesKingDev\TwentyI\Requests\Vps\Vps;
use Saloon\Http\Faking\MockClient;
use Saloon\Http\Faking\MockResponse;

class VpsTest extends TestCase
{
    public function testVpsListReturnsCorrectResponse(): void
    {
        $expectedResponse = [
            'vps' => [
                ['id' => 1, 'name' => 'vps-1', 'status' => 'active'],
                ['id' => 2, 'name' => 'vps-2', 'status' => 'active'],
            ],
        ];

        $this->mockClient = MockClient::global([
            Vps::class => MockResponse::make($expectedResponse, 200),
        ]);

        $this->connector->withMockClient($this->mockClient);

        $response = $this->connector->vps()->vps();

        $this->assertEquals(200, $response->status());
        $this->assertEquals($expectedResponse, $response->json());
    }

    public function testGetVpsReturnsCorrectResponse(): void
    {
        $vpsId = 123;
        $expectedResponse = [
            'id' => $vpsId,
            'name' => 'my-vps',
            'status' => 'active',
            'ip' => '192.168.1.1',
        ];

        $this->mockClient = MockClient::global([
            GetVps::class => MockResponse::make($expectedResponse, 200),
        ]);

        $this->connector->withMockClient($this->mockClient);

        $response = $this->connector->vps()->getVps($vpsId);

        $this->assertEquals(200, $response->status());
        $this->assertEquals($expectedResponse, $response->json());

        $this->mockClient->assertSent(GetVps::class);
    }

    public function testActivateDeactivateVpsReturnsCorrectResponse(): void
    {
        $vpsId = 123;
        $expectedResponse = ['success' => true, 'status' => 'deactivated'];

        $this->mockClient = MockClient::global([
            ActivateDeactivateVps::class => MockResponse::make($expectedResponse, 200),
        ]);

        $this->connector->withMockClient($this->mockClient);

        $response = $this->connector->vps()->activateDeactivateVps($vpsId);

        $this->assertEquals(200, $response->status());
        $this->assertEquals($expectedResponse, $response->json());
    }

    public function testRebootVpsReturnsCorrectResponse(): void
    {
        $vpsId = 123;
        $expectedResponse = ['success' => true];

        $this->mockClient = MockClient::global([
            Reboot::class => MockResponse::make($expectedResponse, 200),
        ]);

        $this->connector->withMockClient($this->mockClient);

        $response = $this->connector->vps()->reboot($vpsId);

        $this->assertEquals(200, $response->status());
        $this->assertEquals($expectedResponse, $response->json());
    }

    public function testBackupsReturnsCorrectResponse(): void
    {
        $vpsId = 123;
        $expectedResponse = [
            'backups' => [
                ['id' => 1, 'date' => '2024-01-01', 'size' => '10GB'],
            ],
        ];

        $this->mockClient = MockClient::global([
            \JamesKingDev\TwentyI\Requests\Vps\Backups::class => MockResponse::make($expectedResponse, 200),
        ]);

        $this->connector->withMockClient($this->mockClient);

        $response = $this->connector->vps()->backups($vpsId);

        $this->assertEquals(200, $response->status());
        $this->assertEquals($expectedResponse, $response->json());
    }

    public function testDisksReturnsCorrectResponse(): void
    {
        $vpsId = 123;
        $expectedResponse = [
            'disks' => [
                ['id' => 'sda', 'size' => '50GB', 'type' => 'SSD'],
            ],
        ];

        $this->mockClient = MockClient::global([
            \JamesKingDev\TwentyI\Requests\Vps\Disks::class => MockResponse::make($expectedResponse, 200),
        ]);

        $this->connector->withMockClient($this->mockClient);

        $response = $this->connector->vps()->disks($vpsId);

        $this->assertEquals(200, $response->status());
        $this->assertEquals($expectedResponse, $response->json());
    }

    public function testIpAddressesReturnsCorrectResponse(): void
    {
        $vpsId = 123;
        $expectedResponse = [
            'ipAddresses' => [
                ['ip' => '192.168.1.1', 'type' => 'ipv4'],
            ],
        ];

        $this->mockClient = MockClient::global([
            \JamesKingDev\TwentyI\Requests\Vps\IpAddresses::class => MockResponse::make($expectedResponse, 200),
        ]);

        $this->connector->withMockClient($this->mockClient);

        $response = $this->connector->vps()->ipAddresses($vpsId);

        $this->assertEquals(200, $response->status());
        $this->assertEquals($expectedResponse, $response->json());
    }

    public function testOperatingSystemsReturnsCorrectResponse(): void
    {
        $vpsId = 123;
        $expectedResponse = [
            'operatingSystems' => [
                ['id' => 'ubuntu-22.04', 'name' => 'Ubuntu 22.04 LTS'],
                ['id' => 'debian-12', 'name' => 'Debian 12'],
            ],
        ];

        $this->mockClient = MockClient::global([
            \JamesKingDev\TwentyI\Requests\Vps\OperatingSystems::class => MockResponse::make($expectedResponse, 200),
        ]);

        $this->connector->withMockClient($this->mockClient);

        $response = $this->connector->vps()->operatingSystems($vpsId);

        $this->assertEquals(200, $response->status());
        $this->assertEquals($expectedResponse, $response->json());
    }
}
