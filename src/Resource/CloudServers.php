<?php

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
    public function cancelTimelineUpgrade(float|int $serverId): Response
    {
        return $this->connector->send(new CancelTimelineUpgrade($serverId));
    }

    public function listServerProviders(): Response
    {
        return $this->connector->send(new ListServerProviders());
    }

    public function orderCloudServer(float|int $resellerId): Response
    {
        return $this->connector->send(new OrderCloudServer($resellerId));
    }

    public function renewCloudServer(float|int $resellerId): Response
    {
        return $this->connector->send(new RenewCloudServer($resellerId));
    }

    public function serverProductSpecs(string $provider): Response
    {
        return $this->connector->send(new ServerProductSpecs($provider));
    }

    public function timelineUpgradePrice(float|int $serverId): Response
    {
        return $this->connector->send(new TimelineUpgradePrice($serverId));
    }

    public function timelineUpgrades(float|int $serverId): Response
    {
        return $this->connector->send(new TimelineUpgrades($serverId));
    }

    public function upgradeServer(float|int $serverId): Response
    {
        return $this->connector->send(new UpgradeServer($serverId));
    }

    public function upgradeServerPrice(float|int $serverId): Response
    {
        return $this->connector->send(new UpgradeServerPrice($serverId));
    }
}
