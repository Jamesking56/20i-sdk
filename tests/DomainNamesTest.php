<?php

declare(strict_types=1);

namespace Tests;

use JamesKingDev\TwentyI\Requests\DomainNames\DomainPeriods;
use JamesKingDev\TwentyI\Requests\DomainNames\DomainPremiumType;
use JamesKingDev\TwentyI\Requests\DomainNames\DomainSearch;
use JamesKingDev\TwentyI\Requests\DomainNames\DomainVerification;
use JamesKingDev\TwentyI\Requests\DomainNames\ListDomains;
use Saloon\Http\Faking\MockClient;
use Saloon\Http\Faking\MockResponse;

class DomainNamesTest extends TestCase
{
    public function testDomainPeriodsReturnsCorrectResponse(): void
    {
        $expectedResponse = ['periods' => [1, 2, 3, 5, 10]];

        $this->mockClient = MockClient::global([
            DomainPeriods::class => MockResponse::make($expectedResponse, 200),
        ]);

        $this->connector->withMockClient($this->mockClient);

        $response = $this->connector->domainNames()->domainPeriods();

        $this->assertEquals(200, $response->status());
        $this->assertEquals($expectedResponse, $response->json());
    }

    public function testDomainPremiumTypeReturnsCorrectResponse(): void
    {
        $expectedResponse = ['type' => 'standard'];

        $this->mockClient = MockClient::global([
            DomainPremiumType::class => MockResponse::make($expectedResponse, 200),
        ]);

        $this->connector->withMockClient($this->mockClient);

        $response = $this->connector->domainNames()->domainPremiumType();

        $this->assertEquals(200, $response->status());
        $this->assertEquals($expectedResponse, $response->json());
    }

    public function testDomainSearchReturnsCorrectResponse(): void
    {
        $domainName = 'example';
        $expectedResponse = [
            'domains' => [
                ['name' => 'example.com', 'available' => true, 'price' => 9.99],
                ['name' => 'example.net', 'available' => false, 'price' => 14.99],
            ],
        ];

        $this->mockClient = MockClient::global([
            DomainSearch::class => MockResponse::make($expectedResponse, 200),
        ]);

        $this->connector->withMockClient($this->mockClient);

        $response = $this->connector->domainNames()->domainSearch($domainName);

        $this->assertEquals(200, $response->status());
        $this->assertEquals($expectedResponse, $response->json());

        $this->mockClient->assertSent(DomainSearch::class);
    }

    public function testDomainVerificationReturnsCorrectResponse(): void
    {
        $expectedResponse = ['verification' => 'pending'];

        $this->mockClient = MockClient::global([
            DomainVerification::class => MockResponse::make($expectedResponse, 200),
        ]);

        $this->connector->withMockClient($this->mockClient);

        $response = $this->connector->domainNames()->domainVerification();

        $this->assertEquals(200, $response->status());
        $this->assertEquals($expectedResponse, $response->json());
    }

    public function testListDomainsReturnsCorrectResponse(): void
    {
        $expectedResponse = [
            'domains' => [
                ['id' => 1, 'name' => 'example.com'],
                ['id' => 2, 'name' => 'test.org'],
            ],
        ];

        $this->mockClient = MockClient::global([
            ListDomains::class => MockResponse::make($expectedResponse, 200),
        ]);

        $this->connector->withMockClient($this->mockClient);

        $response = $this->connector->domainNames()->listDomains();

        $this->assertEquals(200, $response->status());
        $this->assertEquals($expectedResponse, $response->json());

        $this->mockClient->assertSent(ListDomains::class);
    }
}
