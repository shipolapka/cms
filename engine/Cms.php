<?php

namespace Engine;

use Engine\Core\Router\DispatchedRoute;
use Engine\Helper\Common;

use Engine\DI\DI;

class Cms
{
    /**
     * @var DI
     */
    private DI $di;

    public $router;

    /**
     * @param $di
     */
    public function __construct($di)
    {
        $this->di = $di;
        $this->router = $this->di->get('router');
    }

    /**
     * @return void
     * run cms
     */
    public function run()
    {
        try {
            require_once __DIR__ . '/../' . mb_strtolower(ENV) . '/Route.php';

            $routerDispatch = $this->router->dispatch((new Helper\Common)->getMethod(), (new Helper\Common)->getPathUrl());

            if($routerDispatch == null)
            {
                $routerDispatch = new DispatchedRoute('ErrorController:page404');
            }

            list($class, $action) = explode(':', $routerDispatch->getController(), 2);

            $controller = '\\' . ENV . '\\Controller\\' . $class;
            $parameters = $routerDispatch->getParameters();
            call_user_func_array([new $controller($this->di), $action], $parameters);
        } catch (\Exception $e) {

            echo $e->getMessage();
            exit;
        }

        //$db = $this->di->get('test2');
        //print_r($this->di);
        //$this->router->add('product', '/user/12', 'ProductController:index');
        //print_r($this->di);
        //$routerDispatch = $this->router->dispatch(Common::getMethod(), Common::getPathUrl());
        //print_r($routerDispatch);
        //print_r($_SERVER);
        //echo (new Helper\Common)->getMethod();// тут ругался на устаревший статический метод, произведена замена, было Common::getMethod();
        //print (new Helper\Common)->getPathUrl(); //Common::getPathUrl()

    }
}