<?php
/**
 * Created by PhpStorm.
 * User: duxor
 * Date: 23.6.17.
 * Time: 22.11
 */

namespace Wallet\Controller\Web\Route;


use Silex\Application;

class Admin
{
    public function addRoutes($route)
    {
        $route->get("/panel/admin", "Wallet\Controller\Web\Route\Admin::getIndex")->bind("admin_homepage");
        $route->get("/panel/admin/budget", "Wallet\Controller\Web\Route\Admin::getBudget")->bind("admin_budget");
        $route->get("/panel/admin/income", "Wallet\Controller\Web\Route\Admin::getIncome")->bind("admin_income");
        $route->get("/panel/admin/savings", "Wallet\Controller\Web\Route\Admin::getSavings")->bind("admin_savings");
        return $route;
    }

    public function getIndex(Application $app)
    {
        return $app['twig']->render('panel/admin/index.html.twig', array());
    }

    public function getBudget(Application $app)
    {
        return $app['twig']->render('panel/admin/budget.html.twig', array());
    }

    public function getIncome(Application $app)
    {
        return $app['twig']->render('panel/admin/income.html.twig', array());
    }

    public function getSavings(Application $app)
    {
        return $app['twig']->render('panel/admin/savings.html.twig', array());
    }

}