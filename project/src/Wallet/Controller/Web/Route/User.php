<?php
/**
 * Created by PhpStorm.
 * User: duxor
 * Date: 23.6.17.
 * Time: 22.11
 */

namespace Wallet\Controller\Web\Route;


use Silex\Application;

class User
{
    public function addRoutes($route)
    {
        $route->get("/panel/user", "Wallet\Controller\Web\Route\User::getIndex")->bind("user_homepage");
        $route->get("/panel/user/budget", "Wallet\Controller\Web\Route\User::getBudget")->bind("user_budget");
        $route->get("/panel/user/income", "Wallet\Controller\Web\Route\User::getIncome")->bind("user_income");
        return $route;
    }

    public function getIndex(Application $app)
    {
        return $app['twig']->render('panel/user/index.html.twig', array());
    }

    public function getBudget(Application $app)
    {
        return $app['twig']->render('panel/user/budget.html.twig', array());
    }

    public function getIncome(Application $app)
    {
        return $app['twig']->render('panel/user/income.html.twig', array());
    }

}