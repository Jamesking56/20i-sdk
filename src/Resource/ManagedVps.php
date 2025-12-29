<?php
/* GENERATED FILE - Do not edit directly */

declare(strict_types=1);

namespace JamesKingDev\TwentyI\Resource;

use JamesKingDev\TwentyI\Requests\ManagedVps\ActivateDeactivateManagedVps;
use JamesKingDev\TwentyI\Requests\ManagedVps\AddPackage;
use JamesKingDev\TwentyI\Requests\ManagedVps\DeletePackage;
use JamesKingDev\TwentyI\Requests\ManagedVps\GetManagedVps;
use JamesKingDev\TwentyI\Requests\ManagedVps\Limits;
use JamesKingDev\TwentyI\Requests\ManagedVps\ListManagedVps;
use JamesKingDev\TwentyI\Requests\ManagedVps\ManagedVpsProfile;
use JamesKingDev\TwentyI\Requests\ManagedVps\Name;
use Saloon\Http\BaseResource;
use Saloon\Http\Response;

class ManagedVps extends BaseResource
{
    public function activateDeactivateManagedVps(float|int $managedVpsId): Response
    {
        return $this->connector->send(new ActivateDeactivateManagedVps($managedVpsId));
    }

    public function addPackage(float|int $managedVpsId): Response
    {
        return $this->connector->send(new AddPackage($managedVpsId));
    }

    public function deletePackage(float|int $managedVpsId): Response
    {
        return $this->connector->send(new DeletePackage($managedVpsId));
    }

    public function getManagedVps(float|int $managedVpsId): Response
    {
        return $this->connector->send(new GetManagedVps($managedVpsId));
    }

    public function limits(float|int $managedVpsId): Response
    {
        return $this->connector->send(new Limits($managedVpsId));
    }

    public function listManagedVps(): Response
    {
        return $this->connector->send(new ListManagedVps());
    }

    public function managedVpsProfile(float|int $managedVpsId): Response
    {
        return $this->connector->send(new ManagedVpsProfile($managedVpsId));
    }

    public function name(float|int $managedVpsId): Response
    {
        return $this->connector->send(new Name($managedVpsId));
    }
}
