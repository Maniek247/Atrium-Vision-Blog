<?php
declare(strict_types=1);

namespace PrestaShop\Module\ModernModule\Service;

final class GreetingService
{
    public function greet(string $name, string $locale = 'en'): string
    {
        $name = trim($name) ?: 'World';
        return $locale === 'pl'
            ? sprintf('Cześć, %s!', $name)
            : sprintf('Hello, %s!', $name);
    }
}
