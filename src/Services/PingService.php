<?php

declare(strict_types=1);

namespace Miraiportal\Ping\Services;

final class PingService
{
    public function ping(): string
    {
        return 'pong';
    }
}
