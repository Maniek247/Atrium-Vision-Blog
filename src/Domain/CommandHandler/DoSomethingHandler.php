<?php
declare(strict_types=1);

namespace PrestaShop\Module\ModernModule\Domain\CommandHandler;

use PrestaShop\Module\ModernModule\Domain\Command\DoSomethingCommand;

final class DoSomethingHandler
{
    public function handle(DoSomethingCommand $command): void
    {
        // Domain side-effect goes here
        // e.g., write to repository or call API
    }
}
