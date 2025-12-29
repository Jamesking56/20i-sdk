<?php
/* GENERATED FILE - Do not edit directly */

declare(strict_types=1);

namespace JamesKingDev\TwentyI\Resource;

use JamesKingDev\TwentyI\Requests\Packages\ActivateDeactivateDomain;
use JamesKingDev\TwentyI\Requests\Packages\ActivateDeactivatePackage;
use JamesKingDev\TwentyI\Requests\Packages\Applications;
use JamesKingDev\TwentyI\Requests\Packages\Autoresponders;
use JamesKingDev\TwentyI\Requests\Packages\Bandwidth;
use JamesKingDev\TwentyI\Requests\Packages\BlockCountries;
use JamesKingDev\TwentyI\Requests\Packages\BlockIp;
use JamesKingDev\TwentyI\Requests\Packages\CdnAddFeatures;
use JamesKingDev\TwentyI\Requests\Packages\CdnBulkAddFeatures;
use JamesKingDev\TwentyI\Requests\Packages\CdnCacheReport;
use JamesKingDev\TwentyI\Requests\Packages\CdnDeleteSecurityHeader;
use JamesKingDev\TwentyI\Requests\Packages\CdnDeleteSecurityHeaders;
use JamesKingDev\TwentyI\Requests\Packages\CdnGetFeatureGroup;
use JamesKingDev\TwentyI\Requests\Packages\CdnGetFeatures;
use JamesKingDev\TwentyI\Requests\Packages\CdnGetSecurityHeaders;
use JamesKingDev\TwentyI\Requests\Packages\CdnManage;
use JamesKingDev\TwentyI\Requests\Packages\CdnPurgeCache;
use JamesKingDev\TwentyI\Requests\Packages\CdnStats;
use JamesKingDev\TwentyI\Requests\Packages\CdnStatsByCountry;
use JamesKingDev\TwentyI\Requests\Packages\CdnUpdateHeaders;
use JamesKingDev\TwentyI\Requests\Packages\ClearPendingInstall;
use JamesKingDev\TwentyI\Requests\Packages\Contacts;
use JamesKingDev\TwentyI\Requests\Packages\Database;
use JamesKingDev\TwentyI\Requests\Packages\DirectoryIndex;
use JamesKingDev\TwentyI\Requests\Packages\DiskUsageReport;
use JamesKingDev\TwentyI\Requests\Packages\Dkim;
use JamesKingDev\TwentyI\Requests\Packages\Dmarc;
use JamesKingDev\TwentyI\Requests\Packages\Dns;
use JamesKingDev\TwentyI\Requests\Packages\DnsDefault;
use JamesKingDev\TwentyI\Requests\Packages\DnsGoogleApps;
use JamesKingDev\TwentyI\Requests\Packages\DnsGoogleMail;
use JamesKingDev\TwentyI\Requests\Packages\DnsNameservers;
use JamesKingDev\TwentyI\Requests\Packages\DnsOffice365;
use JamesKingDev\TwentyI\Requests\Packages\DnsRetreive;
use JamesKingDev\TwentyI\Requests\Packages\Dnssec;
use JamesKingDev\TwentyI\Requests\Packages\DocumentRoots;
use JamesKingDev\TwentyI\Requests\Packages\Domain;
use JamesKingDev\TwentyI\Requests\Packages\DomainMaxInterval;
use JamesKingDev\TwentyI\Requests\Packages\DomainNamesSubdomains;
use JamesKingDev\TwentyI\Requests\Packages\DomainPrice;
use JamesKingDev\TwentyI\Requests\Packages\DomainPrivacy;
use JamesKingDev\TwentyI\Requests\Packages\DomainTransferStatus;
use JamesKingDev\TwentyI\Requests\Packages\DomainWhois;
use JamesKingDev\TwentyI\Requests\Packages\EasyBuilder;
use JamesKingDev\TwentyI\Requests\Packages\EasyBuilderInstances;
use JamesKingDev\TwentyI\Requests\Packages\EasyBuilderSso;
use JamesKingDev\TwentyI\Requests\Packages\EasyBuilderThemes;
use JamesKingDev\TwentyI\Requests\Packages\EmailBlacklist;
use JamesKingDev\TwentyI\Requests\Packages\EmailConfig;
use JamesKingDev\TwentyI\Requests\Packages\EmailDomain;
use JamesKingDev\TwentyI\Requests\Packages\EmailDomainAlias;
use JamesKingDev\TwentyI\Requests\Packages\EmailForwarderConfig;
use JamesKingDev\TwentyI\Requests\Packages\EmailForwarders;
use JamesKingDev\TwentyI\Requests\Packages\EmailStats;
use JamesKingDev\TwentyI\Requests\Packages\EmailWhitelist;
use JamesKingDev\TwentyI\Requests\Packages\FilePermissions;
use JamesKingDev\TwentyI\Requests\Packages\Forwarders;
use JamesKingDev\TwentyI\Requests\Packages\FtpCredentials;
use JamesKingDev\TwentyI\Requests\Packages\FtpUsers;
use JamesKingDev\TwentyI\Requests\Packages\GetPackageWebInfo;
use JamesKingDev\TwentyI\Requests\Packages\HomeDirectory;
use JamesKingDev\TwentyI\Requests\Packages\Hotlinks;
use JamesKingDev\TwentyI\Requests\Packages\LimitsDomain;
use JamesKingDev\TwentyI\Requests\Packages\LimitsPackage;
use JamesKingDev\TwentyI\Requests\Packages\LimitsWeb;
use JamesKingDev\TwentyI\Requests\Packages\ListDatabaseUsers;
use JamesKingDev\TwentyI\Requests\Packages\ListPackages;
use JamesKingDev\TwentyI\Requests\Packages\ListStackCpUsers;
use JamesKingDev\TwentyI\Requests\Packages\Logs;
use JamesKingDev\TwentyI\Requests\Packages\Mailboxes;
use JamesKingDev\TwentyI\Requests\Packages\MaintenanceMode;
use JamesKingDev\TwentyI\Requests\Packages\MalwareReport;
use JamesKingDev\TwentyI\Requests\Packages\MalwareScan;
use JamesKingDev\TwentyI\Requests\Packages\MssqlDatabases;
use JamesKingDev\TwentyI\Requests\Packages\MssqlRemoveDatabases;
use JamesKingDev\TwentyI\Requests\Packages\MySqlDatabases;
use JamesKingDev\TwentyI\Requests\Packages\MySqlRemoveDatabase;
use JamesKingDev\TwentyI\Requests\Packages\MySqlUserPassword;
use JamesKingDev\TwentyI\Requests\Packages\OneClicks;
use JamesKingDev\TwentyI\Requests\Packages\Package;
use JamesKingDev\TwentyI\Requests\Packages\PackageTypeLimits;
use JamesKingDev\TwentyI\Requests\Packages\PasswordProtect;
use JamesKingDev\TwentyI\Requests\Packages\PendingClone;
use JamesKingDev\TwentyI\Requests\Packages\PendingInstall;
use JamesKingDev\TwentyI\Requests\Packages\PendingSplit;
use JamesKingDev\TwentyI\Requests\Packages\PhpAvailableVersions;
use JamesKingDev\TwentyI\Requests\Packages\PhpConfig;
use JamesKingDev\TwentyI\Requests\Packages\PhpConfigAllowed;
use JamesKingDev\TwentyI\Requests\Packages\PhpConfigUpdate;
use JamesKingDev\TwentyI\Requests\Packages\PhpVersion;
use JamesKingDev\TwentyI\Requests\Packages\Profile;
use JamesKingDev\TwentyI\Requests\Packages\Redirect;
use JamesKingDev\TwentyI\Requests\Packages\RegistryInformation;
use JamesKingDev\TwentyI\Requests\Packages\ScheduledTasks;
use JamesKingDev\TwentyI\Requests\Packages\SessionLimitsDomain;
use JamesKingDev\TwentyI\Requests\Packages\SessionLimitsPackage;
use JamesKingDev\TwentyI\Requests\Packages\Sitemap;
use JamesKingDev\TwentyI\Requests\Packages\SoftwareReInstall;
use JamesKingDev\TwentyI\Requests\Packages\SshIpAddress;
use JamesKingDev\TwentyI\Requests\Packages\SshKeys;
use JamesKingDev\TwentyI\Requests\Packages\SslAddFree;
use JamesKingDev\TwentyI\Requests\Packages\SslCertificates;
use JamesKingDev\TwentyI\Requests\Packages\SslForceStatus;
use JamesKingDev\TwentyI\Requests\Packages\SslInstall;
use JamesKingDev\TwentyI\Requests\Packages\StackCache;
use JamesKingDev\TwentyI\Requests\Packages\Subdomains;
use JamesKingDev\TwentyI\Requests\Packages\TransfersCancel;
use JamesKingDev\TwentyI\Requests\Packages\TransfersChangeIpsTag;
use JamesKingDev\TwentyI\Requests\Packages\TransfersEppCode;
use JamesKingDev\TwentyI\Requests\Packages\TransfersInfo;
use JamesKingDev\TwentyI\Requests\Packages\TransfersLockStatus;
use JamesKingDev\TwentyI\Requests\Packages\TransfersModify;
use JamesKingDev\TwentyI\Requests\Packages\TransfersResendVerification;
use JamesKingDev\TwentyI\Requests\Packages\TransfersStatus;
use JamesKingDev\TwentyI\Requests\Packages\WebDiskUsage;
use JamesKingDev\TwentyI\Requests\Packages\Webmail;
use JamesKingDev\TwentyI\Requests\Packages\WebUsageStats;
use JamesKingDev\TwentyI\Requests\Packages\WelcomeEmails;
use JamesKingDev\TwentyI\Requests\Packages\Whois;
use JamesKingDev\TwentyI\Requests\Packages\WindowsAppPool;
use JamesKingDev\TwentyI\Requests\Packages\WindowsAppPoolConfig;
use JamesKingDev\TwentyI\Requests\Packages\WordPressAdminUsers;
use JamesKingDev\TwentyI\Requests\Packages\WordPressChecksum;
use JamesKingDev\TwentyI\Requests\Packages\WordPressDatabaseCheck;
use JamesKingDev\TwentyI\Requests\Packages\WordPressInstallStackCache;
use JamesKingDev\TwentyI\Requests\Packages\WordPressInstallStatus;
use JamesKingDev\TwentyI\Requests\Packages\WordPressListPlugins;
use JamesKingDev\TwentyI\Requests\Packages\WordPressRoles;
use JamesKingDev\TwentyI\Requests\Packages\WordPressSearchReplace;
use JamesKingDev\TwentyI\Requests\Packages\WordPressSiteSettings;
use JamesKingDev\TwentyI\Requests\Packages\WordPressStaging;
use JamesKingDev\TwentyI\Requests\Packages\WordPressStagingStatus;
use JamesKingDev\TwentyI\Requests\Packages\WordPressThemes;
use JamesKingDev\TwentyI\Requests\Packages\WordPressUpdate;
use JamesKingDev\TwentyI\Requests\Packages\WordPressUserList;
use JamesKingDev\TwentyI\Requests\Packages\WordPressVersion;
use Saloon\Http\BaseResource;
use Saloon\Http\Response;

class Packages extends BaseResource
{
    public function activateDeactivateDomain(float|int $packageId, float|int $domainId): Response
    {
        return $this->connector->send(new ActivateDeactivateDomain($packageId, $domainId));
    }

    public function activateDeactivatePackage(float|int $packageId): Response
    {
        return $this->connector->send(new ActivateDeactivatePackage($packageId));
    }

    public function applications(float|int $packageId): Response
    {
        return $this->connector->send(new Applications($packageId));
    }

    public function autoresponders(float|int $packageId, float|int $emailId): Response
    {
        return $this->connector->send(new Autoresponders($packageId, $emailId));
    }

    public function bandwidth(float|int $packageId): Response
    {
        return $this->connector->send(new Bandwidth($packageId));
    }

    public function blockCountries(float|int $packageId): Response
    {
        return $this->connector->send(new BlockCountries($packageId));
    }

    public function blockIp(float|int $packageId): Response
    {
        return $this->connector->send(new BlockIp($packageId));
    }

    public function cdnAddFeatures(float|int $packageId): Response
    {
        return $this->connector->send(new CdnAddFeatures($packageId));
    }

    public function cdnBulkAddFeatures(float|int $packageId): Response
    {
        return $this->connector->send(new CdnBulkAddFeatures($packageId));
    }

    public function cdnCacheReport(float|int $packageId): Response
    {
        return $this->connector->send(new CdnCacheReport($packageId));
    }

    public function cdnDeleteSecurityHeader(float|int $packageId): Response
    {
        return $this->connector->send(new CdnDeleteSecurityHeader($packageId));
    }

    public function cdnDeleteSecurityHeaders(float|int $packageId): Response
    {
        return $this->connector->send(new CdnDeleteSecurityHeaders($packageId));
    }

    public function cdnGetFeatureGroup(float|int $packageId): Response
    {
        return $this->connector->send(new CdnGetFeatureGroup($packageId));
    }

    public function cdnGetFeatures(float|int $packageId): Response
    {
        return $this->connector->send(new CdnGetFeatures($packageId));
    }

    public function cdnGetSecurityHeaders(float|int $packageId): Response
    {
        return $this->connector->send(new CdnGetSecurityHeaders($packageId));
    }

    public function cdnManage(float|int $packageId): Response
    {
        return $this->connector->send(new CdnManage($packageId));
    }

    public function cdnPurgeCache(float|int $packageId): Response
    {
        return $this->connector->send(new CdnPurgeCache($packageId));
    }

    public function cdnStats(float|int $packageId): Response
    {
        return $this->connector->send(new CdnStats($packageId));
    }

    public function cdnStatsByCountry(float|int $packageId): Response
    {
        return $this->connector->send(new CdnStatsByCountry($packageId));
    }

    public function cdnUpdateHeaders(float|int $packageId): Response
    {
        return $this->connector->send(new CdnUpdateHeaders($packageId));
    }

    public function clearPendingInstall(float|int $packageId): Response
    {
        return $this->connector->send(new ClearPendingInstall($packageId));
    }

    public function contacts(float|int $packageId, float|int $domainId): Response
    {
        return $this->connector->send(new Contacts($packageId, $domainId));
    }

    public function database(float|int $packageId, float|int $databaseId): Response
    {
        return $this->connector->send(new Database($packageId, $databaseId));
    }

    public function directoryIndex(float|int $packageId): Response
    {
        return $this->connector->send(new DirectoryIndex($packageId));
    }

    public function diskUsageReport(float|int $packageId): Response
    {
        return $this->connector->send(new DiskUsageReport($packageId));
    }

    public function dkim(float|int $packageId, float|int $emailId): Response
    {
        return $this->connector->send(new Dkim($packageId, $emailId));
    }

    public function dmarc(float|int $packageId, float|int $emailId): Response
    {
        return $this->connector->send(new Dmarc($packageId, $emailId));
    }

    public function dns(float|int $packageId, float|int $domainId): Response
    {
        return $this->connector->send(new Dns($packageId, $domainId));
    }

    public function dnsDefault(float|int $packageId): Response
    {
        return $this->connector->send(new DnsDefault($packageId));
    }

    public function dnsGoogleApps(float|int $packageId, float|int $domainId): Response
    {
        return $this->connector->send(new DnsGoogleApps($packageId, $domainId));
    }

    public function dnsGoogleMail(float|int $packageId, float|int $domainId): Response
    {
        return $this->connector->send(new DnsGoogleMail($packageId, $domainId));
    }

    public function dnsNameservers(float|int $packageId, float|int $domainId): Response
    {
        return $this->connector->send(new DnsNameservers($packageId, $domainId));
    }

    public function dnsOffice365(float|int $packageId, float|int $domainId): Response
    {
        return $this->connector->send(new DnsOffice365($packageId, $domainId));
    }

    public function dnsRetreive(float|int $packageId, float|int $domainId): Response
    {
        return $this->connector->send(new DnsRetreive($packageId, $domainId));
    }

    public function dnssec(float|int $packageId, float|int $domainId): Response
    {
        return $this->connector->send(new Dnssec($packageId, $domainId));
    }

    public function documentRoots(float|int $packageId): Response
    {
        return $this->connector->send(new DocumentRoots($packageId));
    }

    public function domain(float|int $packageId, float|int $domainId): Response
    {
        return $this->connector->send(new Domain($packageId, $domainId));
    }

    public function domainMaxInterval(float|int $packageId, float|int $domainId): Response
    {
        return $this->connector->send(new DomainMaxInterval($packageId, $domainId));
    }

    public function domainNamesSubdomains(float|int $packageId): Response
    {
        return $this->connector->send(new DomainNamesSubdomains($packageId));
    }

    public function domainPrice(float|int $packageId, float|int $domainId): Response
    {
        return $this->connector->send(new DomainPrice($packageId, $domainId));
    }

    public function domainPrivacy(float|int $packageId, float|int $domainId): Response
    {
        return $this->connector->send(new DomainPrivacy($packageId, $domainId));
    }

    public function domainTransferStatus(float|int $packageId, float|int $domainId): Response
    {
        return $this->connector->send(new DomainTransferStatus($packageId, $domainId));
    }

    public function domainWhois(float|int $packageId, float|int $domainId): Response
    {
        return $this->connector->send(new DomainWhois($packageId, $domainId));
    }

    public function easyBuilder(float|int $packageId): Response
    {
        return $this->connector->send(new EasyBuilder($packageId));
    }

    public function easyBuilderInstances(float|int $packageId): Response
    {
        return $this->connector->send(new EasyBuilderInstances($packageId));
    }

    public function easyBuilderSso(float|int $packageId): Response
    {
        return $this->connector->send(new EasyBuilderSso($packageId));
    }

    public function easyBuilderThemes(float|int $packageId): Response
    {
        return $this->connector->send(new EasyBuilderThemes($packageId));
    }

    public function emailBlacklist(float|int $packageId, float|int $emailId): Response
    {
        return $this->connector->send(new EmailBlacklist($packageId, $emailId));
    }

    public function emailConfig(float|int $packageId, float|int $emailId): Response
    {
        return $this->connector->send(new EmailConfig($packageId, $emailId));
    }

    public function emailDomain(float|int $packageId, float|int $emailId): Response
    {
        return $this->connector->send(new EmailDomain($packageId, $emailId));
    }

    public function emailDomainAlias(float|int $packageId, float|int $emailId): Response
    {
        return $this->connector->send(new EmailDomainAlias($packageId, $emailId));
    }

    public function emailForwarderConfig(float|int $packageId, float|int $emailId): Response
    {
        return $this->connector->send(new EmailForwarderConfig($packageId, $emailId));
    }

    public function emailForwarders(float|int $packageId): Response
    {
        return $this->connector->send(new EmailForwarders($packageId));
    }

    public function emailStats(float|int $packageId, float|int $emailId): Response
    {
        return $this->connector->send(new EmailStats($packageId, $emailId));
    }

    public function emailWhitelist(float|int $packageId, float|int $emailId): Response
    {
        return $this->connector->send(new EmailWhitelist($packageId, $emailId));
    }

    public function filePermissions(float|int $packageId): Response
    {
        return $this->connector->send(new FilePermissions($packageId));
    }

    public function forwarders(float|int $packageId, float|int $emailId): Response
    {
        return $this->connector->send(new Forwarders($packageId, $emailId));
    }

    public function ftpCredentials(float|int $packageId): Response
    {
        return $this->connector->send(new FtpCredentials($packageId));
    }

    public function ftpUsers(float|int $packageId): Response
    {
        return $this->connector->send(new FtpUsers($packageId));
    }

    public function getPackageWebInfo(float|int $packageId): Response
    {
        return $this->connector->send(new GetPackageWebInfo($packageId));
    }

    public function homeDirectory(float|int $packageId): Response
    {
        return $this->connector->send(new HomeDirectory($packageId));
    }

    public function hotlinks(float|int $packageId): Response
    {
        return $this->connector->send(new Hotlinks($packageId));
    }

    public function limitsDomain(float|int $packageId, float|int $domainId): Response
    {
        return $this->connector->send(new LimitsDomain($packageId, $domainId));
    }

    public function limitsPackage(float|int $packageId): Response
    {
        return $this->connector->send(new LimitsPackage($packageId));
    }

    public function limitsWeb(float|int $packageId): Response
    {
        return $this->connector->send(new LimitsWeb($packageId));
    }

    public function listDatabaseUsers(float|int $packageId, float|int $databaseId, string $userId): Response
    {
        return $this->connector->send(new ListDatabaseUsers($packageId, $databaseId, $userId));
    }

    public function listPackages(): Response
    {
        return $this->connector->send(new ListPackages());
    }

    public function listStackCpUsers(float|int $packageId, float|int $domainId): Response
    {
        return $this->connector->send(new ListStackCpUsers($packageId, $domainId));
    }

    public function logs(float|int $packageId): Response
    {
        return $this->connector->send(new Logs($packageId));
    }

    public function mailboxes(float|int $packageId, float|int $emailId): Response
    {
        return $this->connector->send(new Mailboxes($packageId, $emailId));
    }

    public function maintenanceMode(float|int $packageId): Response
    {
        return $this->connector->send(new MaintenanceMode($packageId));
    }

    public function malwareReport(float|int $packageId): Response
    {
        return $this->connector->send(new MalwareReport($packageId));
    }

    public function malwareScan(float|int $packageId): Response
    {
        return $this->connector->send(new MalwareScan($packageId));
    }

    public function mssqlDatabases(float|int $packageId): Response
    {
        return $this->connector->send(new MssqlDatabases($packageId));
    }

    public function mssqlRemoveDatabases(float|int $packageId): Response
    {
        return $this->connector->send(new MssqlRemoveDatabases($packageId));
    }

    public function mySqlDatabases(float|int $packageId): Response
    {
        return $this->connector->send(new MySqlDatabases($packageId));
    }

    public function mySqlRemoveDatabase(float|int $packageId): Response
    {
        return $this->connector->send(new MySqlRemoveDatabase($packageId));
    }

    public function mySqlUserPassword(float|int $packageId): Response
    {
        return $this->connector->send(new MySqlUserPassword($packageId));
    }

    public function oneClicks(float|int $packageId): Response
    {
        return $this->connector->send(new OneClicks($packageId));
    }

    public function package(float|int $packageId): Response
    {
        return $this->connector->send(new Package($packageId));
    }

    public function packageTypeLimits(float|int $packageId): Response
    {
        return $this->connector->send(new PackageTypeLimits($packageId));
    }

    public function passwordProtect(float|int $packageId): Response
    {
        return $this->connector->send(new PasswordProtect($packageId));
    }

    public function pendingClone(float|int $packageId): Response
    {
        return $this->connector->send(new PendingClone($packageId));
    }

    public function pendingInstall(float|int $packageId): Response
    {
        return $this->connector->send(new PendingInstall($packageId));
    }

    public function pendingSplit(float|int $packageId): Response
    {
        return $this->connector->send(new PendingSplit($packageId));
    }

    public function phpAvailableVersions(float|int $packageId): Response
    {
        return $this->connector->send(new PhpAvailableVersions($packageId));
    }

    public function phpConfig(float|int $packageId, string $phpConfigId): Response
    {
        return $this->connector->send(new PhpConfig($packageId, $phpConfigId));
    }

    public function phpConfigAllowed(float|int $packageId): Response
    {
        return $this->connector->send(new PhpConfigAllowed($packageId));
    }

    public function phpConfigUpdate(float|int $packageId, string $phpConfigId): Response
    {
        return $this->connector->send(new PhpConfigUpdate($packageId, $phpConfigId));
    }

    public function phpVersion(float|int $packageId): Response
    {
        return $this->connector->send(new PhpVersion($packageId));
    }

    public function profile(float|int $packageId): Response
    {
        return $this->connector->send(new Profile($packageId));
    }

    public function redirect(float|int $packageId): Response
    {
        return $this->connector->send(new Redirect($packageId));
    }

    public function registryInformation(float|int $packageId, float|int $domainId): Response
    {
        return $this->connector->send(new RegistryInformation($packageId, $domainId));
    }

    public function scheduledTasks(float|int $packageId): Response
    {
        return $this->connector->send(new ScheduledTasks($packageId));
    }

    public function sessionLimitsDomain(float|int $packageId, float|int $domainId): Response
    {
        return $this->connector->send(new SessionLimitsDomain($packageId, $domainId));
    }

    public function sessionLimitsPackage(float|int $packageId): Response
    {
        return $this->connector->send(new SessionLimitsPackage($packageId));
    }

    public function sitemap(float|int $packageId): Response
    {
        return $this->connector->send(new Sitemap($packageId));
    }

    public function softwareReInstall(float|int $packageId): Response
    {
        return $this->connector->send(new SoftwareReInstall($packageId));
    }

    public function sshIpAddress(float|int $packageId): Response
    {
        return $this->connector->send(new SshIpAddress($packageId));
    }

    public function sshKeys(float|int $packageId): Response
    {
        return $this->connector->send(new SshKeys($packageId));
    }

    public function sslAddFree(float|int $packageId): Response
    {
        return $this->connector->send(new SslAddFree($packageId));
    }

    public function sslCertificates(float|int $packageId): Response
    {
        return $this->connector->send(new SslCertificates($packageId));
    }

    public function sslForceStatus(float|int $packageId): Response
    {
        return $this->connector->send(new SslForceStatus($packageId));
    }

    public function sslInstall(float|int $packageId): Response
    {
        return $this->connector->send(new SslInstall($packageId));
    }

    public function stackCache(float|int $packageId): Response
    {
        return $this->connector->send(new StackCache($packageId));
    }

    public function subdomains(float|int $packageId): Response
    {
        return $this->connector->send(new Subdomains($packageId));
    }

    public function transfersCancel(float|int $packageId, float|int $domainId): Response
    {
        return $this->connector->send(new TransfersCancel($packageId, $domainId));
    }

    public function transfersChangeIpsTag(float|int $packageId, float|int $domainId): Response
    {
        return $this->connector->send(new TransfersChangeIpsTag($packageId, $domainId));
    }

    public function transfersEppCode(float|int $packageId, float|int $domainId): Response
    {
        return $this->connector->send(new TransfersEppCode($packageId, $domainId));
    }

    public function transfersInfo(float|int $packageId, float|int $domainId): Response
    {
        return $this->connector->send(new TransfersInfo($packageId, $domainId));
    }

    public function transfersLockStatus(float|int $packageId, float|int $domainId): Response
    {
        return $this->connector->send(new TransfersLockStatus($packageId, $domainId));
    }

    public function transfersModify(float|int $packageId, float|int $domainId): Response
    {
        return $this->connector->send(new TransfersModify($packageId, $domainId));
    }

    public function transfersResendVerification(float|int $packageId, float|int $domainId): Response
    {
        return $this->connector->send(new TransfersResendVerification($packageId, $domainId));
    }

    public function transfersStatus(float|int $packageId, float|int $domainId): Response
    {
        return $this->connector->send(new TransfersStatus($packageId, $domainId));
    }

    public function webDiskUsage(float|int $packageId): Response
    {
        return $this->connector->send(new WebDiskUsage($packageId));
    }

    public function webUsageStats(float|int $packageId): Response
    {
        return $this->connector->send(new WebUsageStats($packageId));
    }

    public function webmail(float|int $packageId, float|int $emailId): Response
    {
        return $this->connector->send(new Webmail($packageId, $emailId));
    }

    public function welcomeEmails(float|int $packageId): Response
    {
        return $this->connector->send(new WelcomeEmails($packageId));
    }

    public function whois(float|int $packageId, float|int $domainId): Response
    {
        return $this->connector->send(new Whois($packageId, $domainId));
    }

    public function windowsAppPool(float|int $packageId): Response
    {
        return $this->connector->send(new WindowsAppPool($packageId));
    }

    public function windowsAppPoolConfig(float|int $packageId): Response
    {
        return $this->connector->send(new WindowsAppPoolConfig($packageId));
    }

    public function wordPressAdminUsers(float|int $packageId): Response
    {
        return $this->connector->send(new WordPressAdminUsers($packageId));
    }

    public function wordPressChecksum(float|int $packageId): Response
    {
        return $this->connector->send(new WordPressChecksum($packageId));
    }

    public function wordPressDatabaseCheck(float|int $packageId): Response
    {
        return $this->connector->send(new WordPressDatabaseCheck($packageId));
    }

    public function wordPressInstallStackCache(float|int $packageId): Response
    {
        return $this->connector->send(new WordPressInstallStackCache($packageId));
    }

    public function wordPressInstallStatus(float|int $packageId): Response
    {
        return $this->connector->send(new WordPressInstallStatus($packageId));
    }

    public function wordPressListPlugins(float|int $packageId): Response
    {
        return $this->connector->send(new WordPressListPlugins($packageId));
    }

    public function wordPressRoles(float|int $packageId): Response
    {
        return $this->connector->send(new WordPressRoles($packageId));
    }

    public function wordPressSearchReplace(float|int $packageId): Response
    {
        return $this->connector->send(new WordPressSearchReplace($packageId));
    }

    public function wordPressSiteSettings(float|int $packageId): Response
    {
        return $this->connector->send(new WordPressSiteSettings($packageId));
    }

    public function wordPressStaging(float|int $packageId): Response
    {
        return $this->connector->send(new WordPressStaging($packageId));
    }

    public function wordPressStagingStatus(float|int $packageId): Response
    {
        return $this->connector->send(new WordPressStagingStatus($packageId));
    }

    public function wordPressThemes(float|int $packageId): Response
    {
        return $this->connector->send(new WordPressThemes($packageId));
    }

    public function wordPressUpdate(float|int $packageId): Response
    {
        return $this->connector->send(new WordPressUpdate($packageId));
    }

    public function wordPressUserList(float|int $packageId): Response
    {
        return $this->connector->send(new WordPressUserList($packageId));
    }

    public function wordPressVersion(float|int $packageId): Response
    {
        return $this->connector->send(new WordPressVersion($packageId));
    }
}
