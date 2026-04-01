<?php

declare(strict_types=1);

namespace Tests;

use JamesKingDev\TwentyI\Requests\Packages\Bandwidth;
use JamesKingDev\TwentyI\Requests\Packages\ListPackages;
use JamesKingDev\TwentyI\Requests\Packages\Package;
use Saloon\Http\Faking\MockClient;
use Saloon\Http\Faking\MockResponse;

class PackagesTest extends TestCase
{
    public function testListPackagesReturnsCorrectResponse(): void
    {
        $expectedResponse = [
            'packages' => [
                ['id' => 1, 'name' => 'package-1', 'status' => 'active'],
                ['id' => 2, 'name' => 'package-2', 'status' => 'active'],
            ],
        ];

        $this->mockClient = MockClient::global([
            ListPackages::class => MockResponse::make($expectedResponse, 200),
        ]);

        $this->connector->withMockClient($this->mockClient);

        $response = $this->connector->packages()->listPackages();

        $this->assertEquals(200, $response->status());
        $this->assertEquals($expectedResponse, $response->json());
    }

    public function testGetPackageReturnsCorrectResponse(): void
    {
        $packageId = 456;
        $expectedResponse = [
            'id' => $packageId,
            'name' => 'my-package',
            'status' => 'active',
            'diskUsage' => '5GB',
        ];

        $this->mockClient = MockClient::global([
            Package::class => MockResponse::make($expectedResponse, 200),
        ]);

        $this->connector->withMockClient($this->mockClient);

        $response = $this->connector->packages()->package($packageId);

        $this->assertEquals(200, $response->status());
        $this->assertEquals($expectedResponse, $response->json());

        $this->mockClient->assertSent(Package::class);
    }

    public function testBandwidthReturnsCorrectResponse(): void
    {
        $packageId = 456;
        $expectedResponse = [
            'used' => '10GB',
            'limit' => '100GB',
            'percent' => 10,
        ];

        $this->mockClient = MockClient::global([
            Bandwidth::class => MockResponse::make($expectedResponse, 200),
        ]);

        $this->connector->withMockClient($this->mockClient);

        $response = $this->connector->packages()->bandwidth($packageId);

        $this->assertEquals(200, $response->status());
        $this->assertEquals($expectedResponse, $response->json());
    }

    public function testActivateDeactivatePackageReturnsCorrectResponse(): void
    {
        $packageId = 456;
        $expectedResponse = ['success' => true, 'status' => 'deactivated'];

        $this->mockClient = MockClient::global([
            \JamesKingDev\TwentyI\Requests\Packages\ActivateDeactivatePackage::class => MockResponse::make($expectedResponse, 200),
        ]);

        $this->connector->withMockClient($this->mockClient);

        $response = $this->connector->packages()->activateDeactivatePackage($packageId);

        $this->assertEquals(200, $response->status());
        $this->assertEquals($expectedResponse, $response->json());
    }

    public function testProfileReturnsCorrectResponse(): void
    {
        $packageId = 456;
        $expectedResponse = [
            'id' => $packageId,
            'username' => 'user123',
            'email' => 'user@example.com',
        ];

        $this->mockClient = MockClient::global([
            \JamesKingDev\TwentyI\Requests\Packages\Profile::class => MockResponse::make($expectedResponse, 200),
        ]);

        $this->connector->withMockClient($this->mockClient);

        $response = $this->connector->packages()->profile($packageId);

        $this->assertEquals(200, $response->status());
        $this->assertEquals($expectedResponse, $response->json());
    }

    public function testLimitsPackageReturnsCorrectResponse(): void
    {
        $packageId = 456;
        $expectedResponse = [
            'domains' => ['used' => 5, 'limit' => 10],
            'subdomains' => ['used' => 20, 'limit' => 50],
        ];

        $this->mockClient = MockClient::global([
            \JamesKingDev\TwentyI\Requests\Packages\LimitsPackage::class => MockResponse::make($expectedResponse, 200),
        ]);

        $this->connector->withMockClient($this->mockClient);

        $response = $this->connector->packages()->limitsPackage($packageId);

        $this->assertEquals(200, $response->status());
        $this->assertEquals($expectedResponse, $response->json());
    }

    public function testSslCertificatesReturnsCorrectResponse(): void
    {
        $packageId = 456;
        $expectedResponse = [
            'certificates' => [
                ['id' => 1, 'domain' => 'example.com', 'expiry' => '2025-01-01'],
            ],
        ];

        $this->mockClient = MockClient::global([
            \JamesKingDev\TwentyI\Requests\Packages\SslCertificates::class => MockResponse::make($expectedResponse, 200),
        ]);

        $this->connector->withMockClient($this->mockClient);

        $response = $this->connector->packages()->sslCertificates($packageId);

        $this->assertEquals(200, $response->status());
        $this->assertEquals($expectedResponse, $response->json());
    }
}
