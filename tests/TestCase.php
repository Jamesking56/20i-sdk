<?php

declare(strict_types=1);

namespace Tests;

use JamesKingDev\TwentyI\TwentyI;
use PHPUnit\Framework\TestCase as PHPUnitTestCase;
use Saloon\Config;
use Saloon\Http\Faking\MockClient;
use Saloon\Http\Faking\MockResponse;

abstract class TestCase extends PHPUnitTestCase
{
    protected TwentyI $connector;

    protected MockClient $mockClient;

    protected function mockResponse(array $body, int $status = 200, array $headers = []): void
    {
        $defaultHeaders = array_merge(['Content-Type' => 'application/json'], $headers);

        $this->mockClient = new MockClient([
            '*' => MockResponse::make($body, $status, $defaultHeaders),
        ]);

        $this->connector->withMockClient($this->mockClient);
    }

    protected function assertRequestSent(string $requestClass): void
    {
        $this->mockClient->assertSent($requestClass);
    }

    protected function assertRequestNotSent(string $requestClass): void
    {
        $this->mockClient->assertNotSent($requestClass);
    }

    protected function assertSentCount(int $count, ?string $requestClass = null): void
    {
        $this->mockClient->assertSentCount($count, $requestClass);
    }

    protected function assertNothingSent(): void
    {
        $this->mockClient->assertNothingSent();
    }

    protected function setUp(): void
    {
        parent::setUp();

        Config::preventStrayRequests();

        $this->connector = new TwentyI('test-api-token');
        $this->mockClient = new MockClient();
    }

    protected function tearDown(): void
    {
        MockClient::destroyGlobal();

        parent::tearDown();
    }
}
