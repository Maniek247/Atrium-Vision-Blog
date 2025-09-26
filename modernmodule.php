<?php
declare(strict_types=1);

if (file_exists(__DIR__ . '/vendor/autoload.php')) {
    require_once __DIR__ . '/vendor/autoload.php';
}

use PrestaShop\PrestaShop\Adapter\SymfonyContainer;
use PrestaShop\PrestaShop\Core\Module\WidgetInterface;

/**
 * Modernmodule - starter skeleton for PrestaShop 8/9, Symfony-based.
 */
class Modernmodule extends Module
{
    public function __construct()
    {
        $this->name = 'modernmodule';
        $this->tab = 'administration';
        $this->version = '0.1.0';
        $this->author = 'Your Company';
        $this->need_instance = 0;
        $this->bootstrap = true;
        $this->displayName = $this->trans('Modern module skeleton', [], 'Modules.Modernmodule.Admin');
        $this->description = $this->trans('Symfony-first module boilerplate for PrestaShop 8/9', [], 'Modules.Modernmodule.Admin');

        // Support PS 8 and 9
        $this->ps_versions_compliancy = ['min' => '8.0.0', 'max' => '9.99.99'];

        parent::__construct();
    }

    /**
     * Add a back-office tab that points to our Symfony route.
     */
    public function getTabs()
    {
        return [
            [
                'class_name' => 'AdminModernmoduleConfiguration',
                'visible' => true,
                'name' => [
                    'en' => 'Modern module',
                    'pl' => 'Nowoczesny moduł',
                ],
                'parent_class_name' => 'CONFIGURE',
                'icon' => 'build',
                // Route is wired via _legacy_link in config/routes.yml
            ],
        ];
    }

    public function install()
    {
        return parent::install()
            && $this->registerHook('actionFrontControllerSetMedia');
    }

    public function uninstall()
    {
        return parent::uninstall();
    }

    public function getContent()
    {
        // Redirect "Configure" button to our Symfony controller
        $router = SymfonyContainer::getInstance()->get('router');
        $url = $router->generate('modernmodule_configuration');
        Tools::redirectAdmin($url);
    }

    /** Example: add module assets on FO */
    public function hookActionFrontControllerSetMedia($params)
    {
        // Example asset (not required)
        // $this->context->controller->registerStylesheet(
        //     'modernmodule-front',
        //     'modules/'.$this->name.'/views/assets/front.css',
        //     ['priority' => 50]
        // );
    }

    public function isUsingNewTranslationSystem()
    {
        return true;
    }
}
