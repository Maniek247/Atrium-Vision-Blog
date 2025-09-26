# Modernmodule — PrestaShop 8/9 Symfony module skeleton

**What you get**
- Symfony-first module layout (routing + services)
- BO tab wired to a Symfony controller
- PSR-4 autoloading via Composer
- PHPUnit unit tests + dev tools (php-cs-fixer, PHPStan)
- Example service, command and CQRS stubs

## Quick start

1. Copy `modernmodule/` into your shop's `modules/` directory.
2. From `modules/modernmodule/` run:
   ```bash
   composer install
   ```
3. Install the module in Back Office or run `bin/console prestashop:module install modernmodule`.
4. In BO go to **Configure → Modern module** (tab is created on install).

## Tests
- Run unit tests from module directory:
  ```bash
  ./vendor/bin/phpunit -c phpunit.xml.dist
  ```

## Notes for PS 8 vs PS 9
- PS 8 ships with **Symfony 4.4**. PS 9 ships with **Symfony 6.4**. This skeleton uses YAML routing and `AbstractController`
  to work on both.
- `FrameworkBundleAdminController` is **deprecated in PS 9**, so we avoid extending it.

## Where to put your code
- Controllers: `src/Controller/...`
- Domain (CQRS): `src/Domain/...`
- Services: `src/Service/...`
- Console commands: `src/Command/...`
- Templates: `views/templates/...`
- Routing/DI: `config/*.yml`
