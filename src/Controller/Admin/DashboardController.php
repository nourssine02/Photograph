<?php

namespace App\Controller\Admin;

use App\Entity\Article;
use App\Entity\Categorie;

use App\Entity\User;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use EasyCorp\Bundle\EasyAdminBundle\Config\MenuItem;
use EasyCorp\Bundle\EasyAdminBundle\Config\Dashboard;
use EasyCorp\Bundle\EasyAdminBundle\Controller\AbstractDashboardController;


class DashboardController extends AbstractDashboardController
{
    /**
     * @Route("/admin", name="admin")
     */
    public function index(): Response
    {
        return parent::index();
    }

    public function configureDashboard(): Dashboard
    {
        return Dashboard::new()
            ->setTitle('Photograph')
            ->disableUrlSignatures()
            ->renderContentMaximized();
    }

    public function configureMenuItems(): iterable
    {
        yield MenuItem::linktoRoute('Back to the website', 'fas fa-home', 'shop');
        yield MenuItem::linkToDashboard('Dashboard', 'fa fa-home');
        yield MenuItem::section('List');
        yield MenuItem::linkToCrud('Categories', 'fas fa-tags', Categorie::class);
        yield MenuItem::linkToCrud('Pictures', 'fas fa-tags', Article::class);
        yield MenuItem::linkToCrud('Users', 'fas fa-tags', User::class);
    
    }
}
