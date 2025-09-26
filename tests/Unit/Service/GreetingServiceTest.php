<?php
declare(strict_types=1);

namespace Tests\ModernModule\Unit\Service;

use PHPUnit\Framework\TestCase;
use PrestaShop\Module\ModernModule\Service\GreetingService;

final class GreetingServiceTest extends TestCase
{
    public function testGreetsInEnglishByDefault(): void
    {
        $svc = new GreetingService();
        $this->assertSame('Hello, World!', $svc->greet(''));
        $this->assertSame('Hello, Anna!', $svc->greet('Anna'));
    }

    public function testGreetsInPolish(): void
    {
        $svc = new GreetingService();
        $this->assertSame('Cześć, Piotr!', $svc->greet('Piotr', 'pl'));
    }
}
