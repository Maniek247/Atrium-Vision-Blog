<?php
declare(strict_types=1);

namespace PrestaShop\Module\ModernModule\Command;

use Symfony\Component\Console\Attribute\AsCommand;
use Symfony\Component\Console\Command\Command;
use Symfony\Component\Console\Input\InputInterface;
use Symfony\Component\Console\Output\OutputInterface;

#[AsCommand(name: 'modernmodule:hello', description: 'Example console command')]
final class HelloCommand extends Command
{
    protected function execute(InputInterface $input, OutputInterface $output): int
    {
        $output->writeln('Hello from Modernmodule!');
        return Command::SUCCESS;
    }
}
