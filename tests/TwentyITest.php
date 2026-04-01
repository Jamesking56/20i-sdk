<?php

declare(strict_types=1);

namespace Tests;

class TwentyITest extends TestCase
{
    public function testCanCreateConnector(): void
    {
        $connector = new \JamesKingDev\TwentyI\TwentyI('test-token');

        $this->assertInstanceOf(\JamesKingDev\TwentyI\TwentyI::class, $connector);
    }

    public function testConnectorHasCorrectBaseUrl(): void
    {
        $connector = new \JamesKingDev\TwentyI\TwentyI('test-token');
        $reflection = new \ReflectionClass($connector);

        $method = $reflection->getMethod('resolveBaseUrl');

        $this->assertEquals('https://api.20i.com/', $method->invoke($connector));
    }

    public function testConnectorHasCorrectTimeout(): void
    {
        $connector = new \JamesKingDev\TwentyI\TwentyI('test-token');
        $reflection = new \ReflectionClass($connector);

        $connectTimeout = $reflection->getProperty('connectTimeout');
        $this->assertEquals(60, $connectTimeout->getValue($connector));

        $requestTimeout = $reflection->getProperty('requestTimeout');
        $this->assertEquals(120, $requestTimeout->getValue($connector));
    }

    public function testCloudServersResourceIsAvailable(): void
    {
        $connector = new \JamesKingDev\TwentyI\TwentyI('test-token');
        $resource = $connector->cloudServers();

        $this->assertInstanceOf(\JamesKingDev\TwentyI\Resource\CloudServers::class, $resource);
    }

    public function testDomainNamesResourceIsAvailable(): void
    {
        $connector = new \JamesKingDev\TwentyI\TwentyI('test-token');
        $resource = $connector->domainNames();

        $this->assertInstanceOf(\JamesKingDev\TwentyI\Resource\DomainNames::class, $resource);
    }

    public function testManagedVpsResourceIsAvailable(): void
    {
        $connector = new \JamesKingDev\TwentyI\TwentyI('test-token');
        $resource = $connector->managedVps();

        $this->assertInstanceOf(\JamesKingDev\TwentyI\Resource\ManagedVps::class, $resource);
    }

    public function testMssqlDatabasesResourceIsAvailable(): void
    {
        $connector = new \JamesKingDev\TwentyI\TwentyI('test-token');
        $resource = $connector->mssqlDatabases();

        $this->assertInstanceOf(\JamesKingDev\TwentyI\Resource\MssqlDatabases::class, $resource);
    }

    public function testOrderAndRenewServicesResourceIsAvailable(): void
    {
        $connector = new \JamesKingDev\TwentyI\TwentyI('test-token');
        $resource = $connector->orderAndRenewServices();

        $this->assertInstanceOf(\JamesKingDev\TwentyI\Resource\OrderAndRenewServices::class, $resource);
    }

    public function testPackagesResourceIsAvailable(): void
    {
        $connector = new \JamesKingDev\TwentyI\TwentyI('test-token');
        $resource = $connector->packages();

        $this->assertInstanceOf(\JamesKingDev\TwentyI\Resource\Packages::class, $resource);
    }

    public function testResellerResourceIsAvailable(): void
    {
        $connector = new \JamesKingDev\TwentyI\TwentyI('test-token');
        $resource = $connector->reseller();

        $this->assertInstanceOf(\JamesKingDev\TwentyI\Resource\Reseller::class, $resource);
    }

    public function testVpsResourceIsAvailable(): void
    {
        $connector = new \JamesKingDev\TwentyI\TwentyI('test-token');
        $resource = $connector->vps();

        $this->assertInstanceOf(\JamesKingDev\TwentyI\Resource\Vps::class, $resource);
    }

    public function testWebsiteTurboResourceIsAvailable(): void
    {
        $connector = new \JamesKingDev\TwentyI\TwentyI('test-token');
        $resource = $connector->websiteTurbo();

        $this->assertInstanceOf(\JamesKingDev\TwentyI\Resource\WebsiteTurbo::class, $resource);
    }
}
