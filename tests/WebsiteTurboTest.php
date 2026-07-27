<?php

declare(strict_types=1);

namespace Tests;

use JamesKingDev\TwentyI\Requests\WebsiteTurbo\AssignPackage;
use JamesKingDev\TwentyI\Requests\WebsiteTurbo\ListWebsiteTurbo;
use Saloon\Http\Faking\MockClient;
use Saloon\Http\Faking\MockResponse;

class WebsiteTurboTest extends TestCase
{
    public function testListWebsiteTurboReturnsCorrectResponse(): void
    {
        $expectedResponse = [
            'websiteTurbo' => [
                ['id' => 'wt-1', 'name' => 'turbo-1', 'status' => 'active'],
            ],
        ];

        $this->mockClient = MockClient::global([
            ListWebsiteTurbo::class => MockResponse::make($expectedResponse, 200),
        ]);

        $this->connector->withMockClient($this->mockClient);

        $response = $this->connector->websiteTurbo()->listWebsiteTurbo();

        $this->assertEquals(200, $response->status());
        $this->assertEquals($expectedResponse, $response->json());
    }

    public function testAssignPackageReturnsCorrectResponse(): void
    {
        $packageId = 123;
        $expectedResponse = [
            'success' => true,
            'websiteTurboId' => 'wt-1',
        ];

        $this->mockClient = MockClient::global([
            AssignPackage::class => MockResponse::make($expectedResponse, 200),
        ]);

        $this->connector->withMockClient($this->mockClient);

        $response = $this->connector->websiteTurbo()->assignPackage($packageId);

        $this->assertEquals(200, $response->status());
        $this->assertEquals($expectedResponse, $response->json());

        $this->mockClient->assertSent(AssignPackage::class);
    }

    public function testUnassignPackageReturnsCorrectResponse(): void
    {
        $packageId = 123;
        $expectedResponse = [
            'success' => true,
        ];

        $this->mockClient = MockClient::global([
            \JamesKingDev\TwentyI\Requests\WebsiteTurbo\UnassignPackage::class => MockResponse::make($expectedResponse, 200),
        ]);

        $this->connector->withMockClient($this->mockClient);

        $response = $this->connector->websiteTurbo()->unassignPackage($packageId);

        $this->assertEquals(200, $response->status());
        $this->assertEquals($expectedResponse, $response->json());
    }
}
