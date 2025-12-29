<?php
/* GENERATED FILE - Do not edit directly */

declare(strict_types=1);

namespace JamesKingDev\TwentyI\Resource;

use JamesKingDev\TwentyI\Requests\DomainNames\DomainPeriods;
use JamesKingDev\TwentyI\Requests\DomainNames\DomainPremiumType;
use JamesKingDev\TwentyI\Requests\DomainNames\DomainSearch;
use JamesKingDev\TwentyI\Requests\DomainNames\DomainVerification;
use JamesKingDev\TwentyI\Requests\DomainNames\ListDomains;
use Saloon\Http\BaseResource;
use Saloon\Http\Response;

class DomainNames extends BaseResource
{
    public function domainPeriods(): Response
    {
        return $this->connector->send(new DomainPeriods());
    }

    public function domainPremiumType(): Response
    {
        return $this->connector->send(new DomainPremiumType());
    }

    public function domainSearch(string $prefixOrName): Response
    {
        return $this->connector->send(new DomainSearch($prefixOrName));
    }

    public function domainVerification(): Response
    {
        return $this->connector->send(new DomainVerification());
    }

    public function listDomains(): Response
    {
        return $this->connector->send(new ListDomains());
    }
}
