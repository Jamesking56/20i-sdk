<?php

declare(strict_types=1);

namespace JamesKingDev\TwentyI;

use JamesKingDev\TwentyI\Resource\CloudServers;
use JamesKingDev\TwentyI\Resource\DomainNames;
use JamesKingDev\TwentyI\Resource\ManagedVps;
use JamesKingDev\TwentyI\Resource\MssqlDatabases;
use JamesKingDev\TwentyI\Resource\OrderAndRenewServices;
use JamesKingDev\TwentyI\Resource\Packages;
use JamesKingDev\TwentyI\Resource\Reseller;
use JamesKingDev\TwentyI\Resource\Vps;
use JamesKingDev\TwentyI\Resource\WebsiteTurbo;
use Saloon\Http\Auth\TokenAuthenticator;
use Saloon\Http\Connector;
use Saloon\Traits\Plugins\HasTimeout;

/**
 * 20i.com Reseller API.
 */
class TwentyI extends Connector
{
    use HasTimeout;

    protected int $connectTimeout = 60;

    protected int $requestTimeout = 120;

    public function __construct(
        #[\SensitiveParameter]
        private string $token,
    ) {
    }

    public function resolveBaseUrl(): string
    {
        return 'https://api.20i.com/';
    }

    public function cloudServers(): CloudServers
    {
        return new CloudServers($this);
    }

    public function domainNames(): DomainNames
    {
        return new DomainNames($this);
    }

    public function managedVps(): ManagedVps
    {
        return new ManagedVps($this);
    }

    public function mssqlDatabases(): MssqlDatabases
    {
        return new MssqlDatabases($this);
    }

    public function orderAndRenewServices(): OrderAndRenewServices
    {
        return new OrderAndRenewServices($this);
    }

    public function packages(): Packages
    {
        return new Packages($this);
    }

    public function reseller(): Reseller
    {
        return new Reseller($this);
    }

    public function vps(): Vps
    {
        return new Vps($this);
    }

    public function websiteTurbo(): WebsiteTurbo
    {
        return new WebsiteTurbo($this);
    }

    protected function defaultAuth(): TokenAuthenticator
    {
        return new TokenAuthenticator(base64_encode($this->token));
    }

    protected function defaultHeaders(): array
    {
        return [
            'Accept' => 'application/json',
            'User-Agent' => '20i PHP SDK - jamesking.dev/20i-sdk',
        ];
    }
}
