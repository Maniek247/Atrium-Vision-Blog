<?php
declare(strict_types=1);

if (file_exists(__DIR__ . '/vendor/autoload.php')) {
    require_once __DIR__ . '/vendor/autoload.php';
}

use PrestaShop\PrestaShop\Adapter\SymfonyContainer;
use PrestaShop\PrestaShop\Core\Module\WidgetInterface;

/**
 * Atriumvisionblog
 */
class Atriumvisionblog extends Module
{
    public function __construct()
    {
        $this->name = 'atriumvisionblog';
        $this->tab = 'administration';
        $this->version = '0.1.0';
        $this->author = 'Adam Mańko';
        $this->need_instance = 0;
        $this->bootstrap = true;
        $this->displayName = $this->trans('Blog', [], 'Modules.Atriumvisionblog.Admin');
        $this->description = $this->trans('Create blog on your PrestaShop', [], 'Modules.Atriumvisionblog.Admin');

        $this->ps_versions_compliancy = ['min' => '8.0.0', 'max' => '9.99.99'];

        parent::__construct();
    }

    /**
     * Add a back-office tab that points to our Symfony route.
     */
    // public function getTabs()
    // {
    //     return [
    //         [
    //             'class_name' => 'AdminModernmoduleConfiguration',
    //             'visible' => true,
    //             'name' => [
    //                 'en' => 'Modern module',
    //                 'pl' => 'Nowoczesny moduł',
    //             ],
    //             'parent_class_name' => 'CONFIGURE',
    //             'icon' => 'build',
    //             // Route is wired via _legacy_link in config/routes.yml
    //         ],
    //     ];
    // }

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
        $route = $this->get('router')->generate('atriumvisionblog_configuration');
        Tools::redirectAdmin($route);
    }

    /** Example: add module assets on FO */
    public function hookActionFrontControllerSetMedia($params)
    {
        // Example asset (not required)
        // $this->context->controller->registerStylesheet(
        //     'Atriumvisionblog-front',
        //     'modules/'.$this->name.'/views/assets/front.css',
        //     ['priority' => 50]
        // );
    }

    public function isUsingNewTranslationSystem()
    {
        return true;
    }
}
