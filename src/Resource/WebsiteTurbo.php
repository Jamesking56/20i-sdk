<?php

declare(strict_types=1);

namespace JamesKingDev\TwentyI\Resource;

use JamesKingDev\TwentyI\Requests\WebsiteTurbo\AssignPackage;
use JamesKingDev\TwentyI\Requests\WebsiteTurbo\ListWebsiteTurbo;
use JamesKingDev\TwentyI\Requests\WebsiteTurbo\UnassignPackage;
use Saloon\Http\BaseResource;
use Saloon\Http\Response;

class WebsiteTurbo extends BaseResource
{
    public function assignPackage(float|int $packageId): Response
    {
        return $this->connector->send(new AssignPackage($packageId));
    }

    public function listWebsiteTurbo(): Response
    {
        return $this->connector->send(new ListWebsiteTurbo());
    }

    public function unassignPackage(float|int $packageId): Response
    {
        return $this->connector->send(new UnassignPackage($packageId));
    }
}
