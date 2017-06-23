<?php
/**
 * Created by PhpStorm.
 * User: duxor
 * Date: 23.6.17.
 * Time: 22.11
 */

namespace Wallet\Controller\Web\Route;


use Silex\Application;

class Home
{
    public function addRoutes($route)
    {
        $route->get("/", "Wallet\Controller\Web\Route\Home::getIndex")->bind("homepage");
        $route->get("/about", "Wallet\Controller\Web\Route\Home::getAbout")->bind("about");
        return $route;
    }

    public function getIndex(Application $app)
    {
        return $app['twig']->render('index.html.twig', array());
    }

    public function getAbout(Application $app)
    {
        return $app['twig']->render('about.html.twig', array());
    }

}