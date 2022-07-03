<?php
namespace App\Core;
use App\Utilities\Url;

class StupidRouter
{
    private $routes;

    public function __construct()
    {
        $this->routes = [
        '/colors/red' => 'colors/red.php',
        '/colors/green' => 'colors/green.php',
        '/colors/blue' => 'colors/blue.php'
        ];
    }

    public function run()
    {
        $current_route = Url::current_route();

        foreach($this->routes as $route => $view){
            if($current_route == $route){
                $this->includeAndDie( BASEPATH . "views/$view");
            }
        }
        #404 Header
        header("HTTP/1.1 404 Not Found");
        $this->includeAndDie( BASEPATH . "views/errors/404.php");
    }

    private function includeAndDie($viewPath)
    {
        include $viewPath;
        die();
    }
}