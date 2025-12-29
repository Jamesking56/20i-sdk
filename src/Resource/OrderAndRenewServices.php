<?php
/* GENERATED FILE - Do not edit directly */

declare(strict_types=1);

namespace JamesKingDev\TwentyI\Resource;

use JamesKingDev\TwentyI\Requests\OrderAndRenewServices\OrderDomainName;
use JamesKingDev\TwentyI\Requests\OrderAndRenewServices\OrderManagedVps;
use JamesKingDev\TwentyI\Requests\OrderAndRenewServices\OrderMssqlDatabases;
use JamesKingDev\TwentyI\Requests\OrderAndRenewServices\OrderPremiumMailbox;
use JamesKingDev\TwentyI\Requests\OrderAndRenewServices\OrderSslCertificates;
use JamesKingDev\TwentyI\Requests\OrderAndRenewServices\OrderVps;
use JamesKingDev\TwentyI\Requests\OrderAndRenewServices\OrderWebsiteTurboCredits;
use JamesKingDev\TwentyI\Requests\OrderAndRenewServices\RenewManagedVps;
use JamesKingDev\TwentyI\Requests\OrderAndRenewServices\RenewMssqlDatabases;
use JamesKingDev\TwentyI\Requests\OrderAndRenewServices\RenewPremiumMailbox;
use JamesKingDev\TwentyI\Requests\OrderAndRenewServices\RenewSslCertificates;
use JamesKingDev\TwentyI\Requests\OrderAndRenewServices\RenewVps;
use Saloon\Http\BaseResource;
use Saloon\Http\Response;

class OrderAndRenewServices extends BaseResource
{
    public function orderDomainName(float|int $resellerId): Response
    {
        return $this->connector->send(new OrderDomainName($resellerId));
    }

    public function orderManagedVps(float|int $resellerId): Response
    {
        return $this->connector->send(new OrderManagedVps($resellerId));
    }

    public function orderMssqlDatabases(float|int $resellerId): Response
    {
        return $this->connector->send(new OrderMssqlDatabases($resellerId));
    }

    public function orderPremiumMailbox(float|int $resellerId): Response
    {
        return $this->connector->send(new OrderPremiumMailbox($resellerId));
    }

    public function orderSslCertificates(float|int $resellerId): Response
    {
        return $this->connector->send(new OrderSslCertificates($resellerId));
    }

    public function orderVps(float|int $resellerId): Response
    {
        return $this->connector->send(new OrderVps($resellerId));
    }

    public function orderWebsiteTurboCredits(float|int $resellerId): Response
    {
        return $this->connector->send(new OrderWebsiteTurboCredits($resellerId));
    }

    public function renewManagedVps(float|int $resellerId): Response
    {
        return $this->connector->send(new RenewManagedVps($resellerId));
    }

    public function renewMssqlDatabases(float|int $resellerId): Response
    {
        return $this->connector->send(new RenewMssqlDatabases($resellerId));
    }

    public function renewPremiumMailbox(float|int $resellerId): Response
    {
        return $this->connector->send(new RenewPremiumMailbox($resellerId));
    }

    public function renewSslCertificates(float|int $resellerId): Response
    {
        return $this->connector->send(new RenewSslCertificates($resellerId));
    }

    public function renewVps(float|int $resellerId): Response
    {
        return $this->connector->send(new RenewVps($resellerId));
    }
}
