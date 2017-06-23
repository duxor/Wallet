<?php
/**
 * Created by PhpStorm.
 * User: duxor
 * Date: 23.6.17.
 * Time: 22.01
 */

namespace Wallet\Controller\Web;

use Silex\Api\ControllerProviderInterface;
use Silex\Application;
use Silex\ControllerCollection;
use Wallet\Controller\Web\Route\Admin;
use Wallet\Controller\Web\Route\Home;
use Wallet\Controller\Web\Route\Login;
use Wallet\Controller\Web\Route\User;


class Web implements ControllerProviderInterface
{
    public function connect(Application $app)
    {
        $route = $app["controllers_factory"];
        $route = (new Admin())->addRoutes($route);
        $route = (new Home())->addRoutes($route);
        $route = (new Login())->addRoutes($route);
        $route = (new User())->addRoutes($route);
        return $route;
    }

}