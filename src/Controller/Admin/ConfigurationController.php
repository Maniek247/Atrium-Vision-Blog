<?php
declare(strict_types=1);

namespace PrestaShop\Module\ModernModule\Controller\Admin;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

/**
 * Back-office configuration page.
 */
class ConfigurationController extends AbstractController
{
    /**
     * Dashboard for the module. Permissions are enforced by BO role on _legacy_controller.
     */
    #[AdminSecurity("is_granted(['read'], request.get('_legacy_controller'))")]
    public function indexAction(): Response
    {
        return $this->render('@Modules/modernmodule/views/templates/admin/configure.html.twig', [
            'title' => 'Modern module skeleton',
        ]);
    }
}
