<?php

declare(strict_types=1);

namespace Tests;

use JamesKingDev\TwentyI\Requests\Reseller\PackageCount;
use JamesKingDev\TwentyI\Requests\Reseller\PackageTypes;
use JamesKingDev\TwentyI\Requests\Reseller\Services;
use Saloon\Http\Faking\MockClient;
use Saloon\Http\Faking\MockResponse;

class ResellerTest extends TestCase
{
    public function testServicesReturnsCorrectResponse(): void
    {
        $resellerId = 789;
        $expectedResponse = [
            'services' => [
                ['id' => 1, 'type' => 'vps', 'name' => 'vps-1'],
                ['id' => 2, 'type' => 'package', 'name' => 'package-1'],
            ],
        ];

        $this->mockClient = MockClient::global([
            Services::class => MockResponse::make($expectedResponse, 200),
        ]);

        $this->connector->withMockClient($this->mockClient);

        $response = $this->connector->reseller()->services($resellerId);

        $this->assertEquals(200, $response->status());
        $this->assertEquals($expectedResponse, $response->json());
    }

    public function testPackageTypesReturnsCorrectResponse(): void
    {
        $expectedResponse = [
            'types' => [
                ['id' => 'starter', 'name' => 'Starter'],
                ['id' => 'professional', 'name' => 'Professional'],
            ],
        ];

        $this->mockClient = MockClient::global([
            PackageTypes::class => MockResponse::make($expectedResponse, 200),
        ]);

        $this->connector->withMockClient($this->mockClient);

        $response = $this->connector->reseller()->packageTypes();

        $this->assertEquals(200, $response->status());
        $this->assertEquals($expectedResponse, $response->json());
    }

    public function testPackageCountReturnsCorrectResponse(): void
    {
        $expectedResponse = ['count' => 25];

        $this->mockClient = MockClient::global([
            PackageCount::class => MockResponse::make($expectedResponse, 200),
        ]);

        $this->connector->withMockClient($this->mockClient);

        $response = $this->connector->reseller()->packageCount();

        $this->assertEquals(200, $response->status());
        $this->assertEquals($expectedResponse, $response->json());
    }

    public function testAccountBalanceReturnsCorrectResponse(): void
    {
        $resellerId = 789;
        $expectedResponse = ['balance' => 1500.00, 'currency' => 'GBP'];

        $this->mockClient = MockClient::global([
            \JamesKingDev\TwentyI\Requests\Reseller\AccountBalance::class => MockResponse::make($expectedResponse, 200),
        ]);

        $this->connector->withMockClient($this->mockClient);

        $response = $this->connector->reseller()->accountBalance($resellerId);

        $this->assertEquals(200, $response->status());
        $this->assertEquals($expectedResponse, $response->json());
    }

    public function testEmailsReturnsCorrectResponse(): void
    {
        $resellerId = 789;
        $expectedResponse = [
            'emails' => [
                ['id' => 1, 'subject' => 'Welcome', 'date' => '2024-01-01'],
            ],
        ];

        $this->mockClient = MockClient::global([
            \JamesKingDev\TwentyI\Requests\Reseller\Emails::class => MockResponse::make($expectedResponse, 200),
        ]);

        $this->connector->withMockClient($this->mockClient);

        $response = $this->connector->reseller()->emails($resellerId);

        $this->assertEquals(200, $response->status());
        $this->assertEquals($expectedResponse, $response->json());
    }

    public function testListPremiumMailboxesReturnsCorrectResponse(): void
    {
        $expectedResponse = [
            'mailboxes' => [
                ['id' => 'mb-1', 'quota' => '5GB'],
            ],
        ];

        $this->mockClient = MockClient::global([
            \JamesKingDev\TwentyI\Requests\Reseller\ListPremiumMailboxes::class => MockResponse::make($expectedResponse, 200),
        ]);

        $this->connector->withMockClient($this->mockClient);

        $response = $this->connector->reseller()->listPremiumMailboxes();

        $this->assertEquals(200, $response->status());
        $this->assertEquals($expectedResponse, $response->json());
    }

    public function testListVirtualNameserversReturnsCorrectResponse(): void
    {
        $expectedResponse = [
            'nameservers' => [
                ['id' => 'ns1', 'name' => 'ns1.20i.com'],
                ['id' => 'ns2', 'name' => 'ns2.20i.com'],
            ],
        ];

        $this->mockClient = MockClient::global([
            \JamesKingDev\TwentyI\Requests\Reseller\ListVirtualNameservers::class => MockResponse::make($expectedResponse, 200),
        ]);

        $this->connector->withMockClient($this->mockClient);

        $response = $this->connector->reseller()->listVirtualNameservers();

        $this->assertEquals(200, $response->status());
        $this->assertEquals($expectedResponse, $response->json());
    }
}
