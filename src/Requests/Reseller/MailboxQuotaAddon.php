<?php

declare(strict_types=1);

namespace JamesKingDev\TwentyI\Requests\Reseller;

use Saloon\Contracts\Body\HasBody;
use Saloon\Enums\Method;
use Saloon\Traits\Body\HasJsonBody;

class MailboxQuotaAddon implements HasBody
{
    use HasJsonBody;

    protected Method $method = Method::POST;

    public function __construct(
        protected readonly string $id,
    ) {
    }

    public function resolveEndpoint(): string
    {
        return "/reseller/mailboxQuotaAddon/{$this->id}";
    }
}
