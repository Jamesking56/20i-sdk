<?php
/* GENERATED FILE - Do not edit directly */

declare(strict_types=1);

namespace JamesKingDev\TwentyI\Resource;

use JamesKingDev\TwentyI\Requests\CloudServers\CancelTimelineUpgrade;
use JamesKingDev\TwentyI\Requests\CloudServers\ListServerProviders;
use JamesKingDev\TwentyI\Requests\CloudServers\OrderCloudServer;
use JamesKingDev\TwentyI\Requests\CloudServers\RenewCloudServer;
use JamesKingDev\TwentyI\Requests\CloudServers\ServerProductSpecs;
use JamesKingDev\TwentyI\Requests\CloudServers\TimelineUpgradePrice;
use JamesKingDev\TwentyI\Requests\CloudServers\TimelineUpgrades;
use JamesKingDev\TwentyI\Requests\CloudServers\UpgradeServer;
use JamesKingDev\TwentyI\Requests\CloudServers\UpgradeServerPrice;
use Saloon\Http\BaseResource;
use Saloon\Http\Response;

class CloudServers extends BaseResource
{
    public function cancelTimelineUpgrade(float|int $resellerId): Response
    {
        return $this->connector->send(new CancelTimelineUpgrade($resellerId));
    }

    public function listServerProviders(float|int $resellerId): Response
    {
        return $this->connector->send(new ListServerProviders($resellerId));
    }

    public function orderCloudServer(float|int $resellerId): Response
    {
        return $this->connector->send(new OrderCloudServer($resellerId));
    }

    public function renewCloudServer(float|int $resellerId): Response
    {
        return $this->connector->send(new RenewCloudServer($resellerId));
    }

    public function serverProductSpecs(float|int $resellerId): Response
    {
        return $this->connector->send(new ServerProductSpecs($resellerId));
    }

    public function timelineUpgradePrice(float|int $resellerId): Response
    {
        return $this->connector->send(new TimelineUpgradePrice($resellerId));
    }

    public function timelineUpgrades(float|int $resellerId): Response
    {
        return $this->connector->send(new TimelineUpgrades($resellerId));
    }

    public function upgradeServer(float|int $resellerId): Response
    {
        return $this->connector->send(new UpgradeServer($resellerId));
    }

    public function upgradeServerPrice(float|int $resellerId): Response
    {
        return $this->connector->send(new UpgradeServerPrice($resellerId));
    }
}
