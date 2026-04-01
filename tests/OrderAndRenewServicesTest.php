<?php

declare(strict_types=1);

namespace Tests;

use JamesKingDev\TwentyI\Requests\OrderAndRenewServices\OrderVps;
use JamesKingDev\TwentyI\Requests\OrderAndRenewServices\RenewVps;
use Saloon\Http\Faking\MockClient;
use Saloon\Http\Faking\MockResponse;

class OrderAndRenewServicesTest extends TestCase
{
    public function testOrderVpsReturnsCorrectResponse(): void
    {
        $resellerId = 789;
        $expectedResponse = [
            'orderId' => 'order-123',
            'status' => 'pending',
            'vpsId' => 456,
        ];

        $this->mockClient = MockClient::global([
            OrderVps::class => MockResponse::make($expectedResponse, 200),
        ]);

        $this->connector->withMockClient($this->mockClient);

        $response = $this->connector->orderAndRenewServices()->orderVps($resellerId);

        $this->assertEquals(200, $response->status());
        $this->assertEquals($expectedResponse, $response->json());
    }

    public function testRenewVpsReturnsCorrectResponse(): void
    {
        $resellerId = 789;
        $expectedResponse = [
            'success' => true,
            'newExpiry' => '2025-01-01',
        ];

        $this->mockClient = MockClient::global([
            RenewVps::class => MockResponse::make($expectedResponse, 200),
        ]);

        $this->connector->withMockClient($this->mockClient);

        $response = $this->connector->orderAndRenewServices()->renewVps($resellerId);

        $this->assertEquals(200, $response->status());
        $this->assertEquals($expectedResponse, $response->json());
    }

    public function testOrderDomainNameReturnsCorrectResponse(): void
    {
        $resellerId = 789;
        $expectedResponse = [
            'orderId' => 'order-456',
            'domain' => 'example.com',
        ];

        $this->mockClient = MockClient::global([
            \JamesKingDev\TwentyI\Requests\OrderAndRenewServices\OrderDomainName::class => MockResponse::make($expectedResponse, 200),
        ]);

        $this->connector->withMockClient($this->mockClient);

        $response = $this->connector->orderAndRenewServices()->orderDomainName($resellerId);

        $this->assertEquals(200, $response->status());
        $this->assertEquals($expectedResponse, $response->json());
    }
}
