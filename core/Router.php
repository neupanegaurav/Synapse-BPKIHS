<?php
/**
 * Simple Front-Controller Router
 * Maps URL parameters to Controller actions.
 */

class Router
{
    private $routes = [];

    /**
     * Register a route.
     * @param string $page  The page identifier (from ?page=xxx)
     * @param string $controller  Controller class name
     * @param string $action  Method name on the controller
     */
    public function add(string $page, string $controller, string $action = 'index'): self
    {
        $this->routes[$page] = ['controller' => $controller, 'action' => $action];
        return $this;
    }

    /**
     * Dispatch the current request to the appropriate controller.
     */
    public function dispatch(): void
    {
        $page = isset($_GET['page']) ? trim($_GET['page']) : 'home';
        $page = preg_replace('/[^a-zA-Z0-9_-]/', '', $page); // sanitize

        if (!isset($this->routes[$page])) {
            http_response_code(404);
            require VIEW_PATH . '/errors/404.php';
            return;
        }

        $route = $this->routes[$page];
        $controllerClass = $route['controller'];
        $action = $route['action'];

        // Auto-load the controller file
        $controllerFile = CONTROLLER_PATH . '/' . $controllerClass . '.php';
        if (!file_exists($controllerFile)) {
            http_response_code(500);
            echo "Controller file not found: {$controllerClass}";
            return;
        }

        require_once $controllerFile;

        if (!class_exists($controllerClass)) {
            http_response_code(500);
            echo "Controller class not found: {$controllerClass}";
            return;
        }

        $controller = new $controllerClass();

        if (!method_exists($controller, $action)) {
            http_response_code(500);
            echo "Action not found: {$controllerClass}::{$action}";
            return;
        }

        $controller->$action();
    }
}
