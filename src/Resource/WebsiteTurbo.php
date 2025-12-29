<?php
/* GENERATED FILE - Do not edit directly */

declare(strict_types=1);

namespace JamesKingDev\TwentyI\Resource;

use JamesKingDev\TwentyI\Requests\WebsiteTurbo\AssignPackage;
use JamesKingDev\TwentyI\Requests\WebsiteTurbo\ListWebsiteTurbo;
use JamesKingDev\TwentyI\Requests\WebsiteTurbo\UnassignPackage;
use Saloon\Http\BaseResource;
use Saloon\Http\Response;

class WebsiteTurbo extends BaseResource
{
    public function assignPackage(float|int $websiteTurboId): Response
    {
        return $this->connector->send(new AssignPackage($websiteTurboId));
    }

    public function listWebsiteTurbo(float|int $websiteTurboId): Response
    {
        return $this->connector->send(new ListWebsiteTurbo($websiteTurboId));
    }

    public function unassignPackage(float|int $websiteTurboId): Response
    {
        return $this->connector->send(new UnassignPackage($websiteTurboId));
    }
}
