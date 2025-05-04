<?php

declare(strict_types=1);

namespace Miraiportal\Ping\Tests\Unit\Services;

use Miraiportal\Ping\Services\PingService;
use PHPUnit\Framework\TestCase;

final class PingServiceTest extends TestCase
{
    private PingService $pingService;

    protected function setUp(): void
    {
        parent::setUp();

        $this->pingService = new PingService;
    }

    public function test_ping(): void
    {
        $this->assertSame(
            'pong',
            $this->pingService->ping(),
        );
    }
}
