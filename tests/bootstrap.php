<?php
declare(strict_types=1);

// Composer autoload (module dev)
$vendor = __DIR__ . '/../vendor/autoload.php';
if (file_exists($vendor)) {
    require_once $vendor;
}

// Allow running unit tests without a full PrestaShop context.
// For integration tests you may want to bootstrap PrestaShop's Kernel,
// which requires the shop path. See tests/Integration/KernelBootstrap.php.
