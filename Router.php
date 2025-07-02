<?php

class Router {
    private $routes = [];


    /**
     * Set a Route Method
     * @param string $uri
     * @param string $method
     * @param string $controller
     * @return void
     */

    public function setMethod($method, $uri, $controller){
        $this->routes[] = [
            'method' => $method,
            'uri' => $uri,
            'controller' => $controller
        ];
    }

    /**
     * Add a Get Route
     * @param string $uri
     * @param string $controller
     * @return void
     */

    public function get($uri, $controller){
        $this->setMethod('GET', $uri, $controller);
    }


    /**
     * Add a DELETE Route
     * @param string $uri
     * @param string $controller
     * @return void
     */

    public function delete($uri, $controller){
        $this->setMethod('GET', $uri, $controller);
    }


    /**
     * Add a POST Route
     * @param string $uri
     * @param string $controller
     * @return void
     */

    public function post($uri, $controller){
        $this->setMethod('GET', $uri, $controller);
    }


    /**
     * Add a PUT Route
     * @param string $uri
     * @param string $controller
     * @return void
     */

    public function put($uri, $controller){
        $this->setMethod('GET', $uri, $controller);
    }


    /**
     * Router Connection to Controller Function
     * @param $uri
     * @param $method
     * @return void
     * 
     */

    function getRoute($uri, $method){
        $routes = $this->routes;
        foreach($routes as $route){
            if (($route['uri'] === $uri) && ($route['method'] === $method)){
                require basePath($route['controller']);
                return;
            }
        }

        http_response_code(404);
        require basePath('errors/404.php');
    }
}

?>