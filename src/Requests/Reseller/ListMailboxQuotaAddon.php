<?php
/* GENERATED FILE - Do not edit directly */

declare(strict_types=1);

namespace JamesKingDev\TwentyI\Requests\Reseller;

use Saloon\Enums\Method;
use Saloon\Http\Request;

/**
 * List Mailbox Quota Addon.
 */
class ListMailboxQuotaAddon extends Request
{
    protected Method $method = Method::GET;

    public function __construct()
    {
    }

    public function resolveEndpoint(): string
    {
        return '/mailbox_quota_addon';
    }
}
