<?php
/**
 * Created by PhpStorm.
 * User: duxor
 * Date: 23.6.17.
 * Time: 22.11
 */

namespace Wallet\Controller\Web\Route;

use Silex\Application;

class Login
{
    public function addRoutes($route)
    {
        $route->get('/login', 'Wallet\Controller\Web\Route\Login::getIndex')->bind('login_page');
        return $route;
    }

    public function getIndex(Application $app)
    {
        return $app['twig']->render('login.html.twig');
    }
}