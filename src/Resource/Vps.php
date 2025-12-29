<?php
/* GENERATED FILE - Do not edit directly */

declare(strict_types=1);

namespace JamesKingDev\TwentyI\Resource;

use JamesKingDev\TwentyI\Requests\Vps\ActivateDeactivateVps;
use JamesKingDev\TwentyI\Requests\Vps\Backups;
use JamesKingDev\TwentyI\Requests\Vps\ChangePassword;
use JamesKingDev\TwentyI\Requests\Vps\CPanel;
use JamesKingDev\TwentyI\Requests\Vps\Disks;
use JamesKingDev\TwentyI\Requests\Vps\GetVps;
use JamesKingDev\TwentyI\Requests\Vps\GetVpsAddon;
use JamesKingDev\TwentyI\Requests\Vps\IpAddresses;
use JamesKingDev\TwentyI\Requests\Vps\LimitsVps;
use JamesKingDev\TwentyI\Requests\Vps\OperatingSystems;
use JamesKingDev\TwentyI\Requests\Vps\Reboot;
use JamesKingDev\TwentyI\Requests\Vps\Rebuild;
use JamesKingDev\TwentyI\Requests\Vps\ReverseDns;
use JamesKingDev\TwentyI\Requests\Vps\Shutdown;
use JamesKingDev\TwentyI\Requests\Vps\Start;
use JamesKingDev\TwentyI\Requests\Vps\Vnc;
use JamesKingDev\TwentyI\Requests\Vps\VncLock;
use JamesKingDev\TwentyI\Requests\Vps\VncUnlock;
use JamesKingDev\TwentyI\Requests\Vps\Vps as VpsRequest;
use JamesKingDev\TwentyI\Requests\Vps\VpsName;
use Saloon\Http\BaseResource;
use Saloon\Http\Response;

class Vps extends BaseResource
{
    public function activateDeactivateVps(float|int $vpsId): Response
    {
        return $this->connector->send(new ActivateDeactivateVps($vpsId));
    }

    public function backups(float|int $vpsId): Response
    {
        return $this->connector->send(new Backups($vpsId));
    }

    public function changePassword(float|int $vpsId): Response
    {
        return $this->connector->send(new ChangePassword($vpsId));
    }

    public function cpanel(float|int $vpsId): Response
    {
        return $this->connector->send(new CPanel($vpsId));
    }

    public function disks(float|int $vpsId): Response
    {
        return $this->connector->send(new Disks($vpsId));
    }

    public function getVps(float|int $vpsId): Response
    {
        return $this->connector->send(new GetVps($vpsId));
    }

    public function getVpsAddon(float|int $vpsId, float|int $addonId): Response
    {
        return $this->connector->send(new GetVpsAddon($vpsId, $addonId));
    }

    public function ipAddresses(float|int $vpsId): Response
    {
        return $this->connector->send(new IpAddresses($vpsId));
    }

    public function limitsVps(float|int $vpsId): Response
    {
        return $this->connector->send(new LimitsVps($vpsId));
    }

    public function operatingSystems(float|int $vpsId): Response
    {
        return $this->connector->send(new OperatingSystems($vpsId));
    }

    public function reboot(float|int $vpsId): Response
    {
        return $this->connector->send(new Reboot($vpsId));
    }

    public function rebuild(float|int $vpsId): Response
    {
        return $this->connector->send(new Rebuild($vpsId));
    }

    public function reverseDns(float|int $vpsId): Response
    {
        return $this->connector->send(new ReverseDns($vpsId));
    }

    public function shutdown(float|int $vpsId): Response
    {
        return $this->connector->send(new Shutdown($vpsId));
    }

    public function start(float|int $vpsId): Response
    {
        return $this->connector->send(new Start($vpsId));
    }

    public function vnc(float|int $vpsId): Response
    {
        return $this->connector->send(new Vnc($vpsId));
    }

    public function vncLock(float|int $vpsId): Response
    {
        return $this->connector->send(new VncLock($vpsId));
    }

    public function vncUnlock(float|int $vpsId): Response
    {
        return $this->connector->send(new VncUnlock($vpsId));
    }

    public function vps(): Response
    {
        return $this->connector->send(new VpsRequest());
    }

    public function vpsName(float|int $vpsId): Response
    {
        return $this->connector->send(new VpsName($vpsId));
    }
}
