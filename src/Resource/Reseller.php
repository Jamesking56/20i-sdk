<?php
/* GENERATED FILE - Do not edit directly */

declare(strict_types=1);

namespace JamesKingDev\TwentyI\Resource;

use JamesKingDev\TwentyI\Requests\Reseller\AccountBalance;
use JamesKingDev\TwentyI\Requests\Reseller\DomainNameTransfer;
use JamesKingDev\TwentyI\Requests\Reseller\Emails;
use JamesKingDev\TwentyI\Requests\Reseller\ListMailboxQuotaAddon;
use JamesKingDev\TwentyI\Requests\Reseller\ListPremiumMailboxes;
use JamesKingDev\TwentyI\Requests\Reseller\ListVirtualNameservers;
use JamesKingDev\TwentyI\Requests\Reseller\MailboxQuotaAddon;
use JamesKingDev\TwentyI\Requests\Reseller\MssqlDatabaseRenew;
use JamesKingDev\TwentyI\Requests\Reseller\NominetBrand;
use JamesKingDev\TwentyI\Requests\Reseller\PackageAdd;
use JamesKingDev\TwentyI\Requests\Reseller\PackageAllowanceAdd;
use JamesKingDev\TwentyI\Requests\Reseller\PackageAllowanceUpdate;
use JamesKingDev\TwentyI\Requests\Reseller\PackageBrand;
use JamesKingDev\TwentyI\Requests\Reseller\PackageCount;
use JamesKingDev\TwentyI\Requests\Reseller\PackageDelete;
use JamesKingDev\TwentyI\Requests\Reseller\PackageTypes;
use JamesKingDev\TwentyI\Requests\Reseller\PackageUpdate;
use JamesKingDev\TwentyI\Requests\Reseller\PasswordResetEmail;
use JamesKingDev\TwentyI\Requests\Reseller\PremiumMailbox;
use JamesKingDev\TwentyI\Requests\Reseller\RenewDomainName;
use JamesKingDev\TwentyI\Requests\Reseller\RenewSslCertificates;
use JamesKingDev\TwentyI\Requests\Reseller\ResellerSettings;
use JamesKingDev\TwentyI\Requests\Reseller\ResendSslApprovalEmail;
use JamesKingDev\TwentyI\Requests\Reseller\Services;
use JamesKingDev\TwentyI\Requests\Reseller\SplitPackage;
use JamesKingDev\TwentyI\Requests\Reseller\StackCpUsers;
use JamesKingDev\TwentyI\Requests\Reseller\StackUser;
use JamesKingDev\TwentyI\Requests\Reseller\StackUserFtpLocks;
use JamesKingDev\TwentyI\Requests\Reseller\StackUserGrants;
use JamesKingDev\TwentyI\Requests\Reseller\StackUserPackageAllowance;
use JamesKingDev\TwentyI\Requests\Reseller\VirtualNameservers;
use Saloon\Http\BaseResource;
use Saloon\Http\Response;

class Reseller extends BaseResource
{
    public function accountBalance(float|int $resellerId): Response
    {
        return $this->connector->send(new AccountBalance($resellerId));
    }

    public function domainNameTransfer(float|int $resellerId): Response
    {
        return $this->connector->send(new DomainNameTransfer($resellerId));
    }

    public function emails(float|int $resellerId): Response
    {
        return $this->connector->send(new Emails($resellerId));
    }

    public function listMailboxQuotaAddon(): Response
    {
        return $this->connector->send(new ListMailboxQuotaAddon());
    }

    public function listPremiumMailboxes(): Response
    {
        return $this->connector->send(new ListPremiumMailboxes());
    }

    public function listVirtualNameservers(): Response
    {
        return $this->connector->send(new ListVirtualNameservers());
    }

    public function mailboxQuotaAddon(string $id): Response
    {
        return $this->connector->send(new MailboxQuotaAddon($id));
    }

    public function mssqlDatabaseRenew(float|int $resellerId): Response
    {
        return $this->connector->send(new MssqlDatabaseRenew($resellerId));
    }

    public function nominetBrand(float|int $resellerId): Response
    {
        return $this->connector->send(new NominetBrand($resellerId));
    }

    public function packageAdd(float|int $resellerId): Response
    {
        return $this->connector->send(new PackageAdd($resellerId));
    }

    public function packageAllowanceAdd(float|int $resellerId): Response
    {
        return $this->connector->send(new PackageAllowanceAdd($resellerId));
    }

    public function packageAllowanceUpdate(float|int $resellerId): Response
    {
        return $this->connector->send(new PackageAllowanceUpdate($resellerId));
    }

    public function packageBrand(float|int $resellerId): Response
    {
        return $this->connector->send(new PackageBrand($resellerId));
    }

    public function packageCount(float|int $resellerId): Response
    {
        return $this->connector->send(new PackageCount($resellerId));
    }

    public function packageDelete(float|int $resellerId): Response
    {
        return $this->connector->send(new PackageDelete($resellerId));
    }

    public function packageTypes(float|int $resellerId): Response
    {
        return $this->connector->send(new PackageTypes($resellerId));
    }

    public function packageUpdate(float|int $resellerId): Response
    {
        return $this->connector->send(new PackageUpdate($resellerId));
    }

    public function passwordResetEmail(float|int $resellerId): Response
    {
        return $this->connector->send(new PasswordResetEmail($resellerId));
    }

    public function premiumMailbox(string $id): Response
    {
        return $this->connector->send(new PremiumMailbox($id));
    }

    public function renewDomainName(float|int $resellerId): Response
    {
        return $this->connector->send(new RenewDomainName($resellerId));
    }

    public function renewSslCertificates(float|int $resellerId): Response
    {
        return $this->connector->send(new RenewSslCertificates($resellerId));
    }

    public function resellerSettings(float|int $resellerId): Response
    {
        return $this->connector->send(new ResellerSettings($resellerId));
    }

    public function resendSslApprovalEmail(string $id): Response
    {
        return $this->connector->send(new ResendSslApprovalEmail($id));
    }

    public function services(float|int $resellerId): Response
    {
        return $this->connector->send(new Services($resellerId));
    }

    public function splitPackage(float|int $resellerId): Response
    {
        return $this->connector->send(new SplitPackage($resellerId));
    }

    public function stackUser(float|int $resellerId, string $stackUserId): Response
    {
        return $this->connector->send(new StackUser($resellerId, $stackUserId));
    }

    public function stackUserFtpLocks(float|int $resellerId, string $stackUserId): Response
    {
        return $this->connector->send(new StackUserFtpLocks($resellerId, $stackUserId));
    }

    public function stackUserGrants(float|int $resellerId, string $stackUserId): Response
    {
        return $this->connector->send(new StackUserGrants($resellerId, $stackUserId));
    }

    public function stackUserPackageAllowance(float|int $resellerId, float|int $stackUserPackageAllowanceId): Response
    {
        return $this->connector->send(new StackUserPackageAllowance($resellerId, $stackUserPackageAllowanceId));
    }

    public function stackCpUsers(float|int $resellerId): Response
    {
        return $this->connector->send(new StackCpUsers($resellerId));
    }

    public function virtualNameservers(float|int $resellerId): Response
    {
        return $this->connector->send(new VirtualNameservers($resellerId));
    }
}
