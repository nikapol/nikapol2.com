<?php
use Routing\Router;
use Routing\MatchedRoute;
use Routing\RouterTrait;

try {
    $router = new Router(RouterTrait::GET_HTTP_HOST());

    $router->add('main', '/main', 'controller_main:action_index' , 'GET|POST');
    $router->add('services', '/services', 'controller_services:action_index' , 'GET|POST');
    $router->add('contacts', '/contacts', 'controller_contacts:action_index' , 'GET|POST');
    $router->add('portfolio', '/portfolio', 'controller_portfolio:action_index' , 'GET|POST');
    $router->add('admin', '/admin', 'controller_admin:action_index' , 'GET|POST');
    $router->add('404', '/404', 'controller_404:action_index' , 'GET|POST');
   

    $route = $router->match(RouterTrait::GET_METHOD(), RouterTrait::GET_PATH_INFO());

    if (null == $route) {
        $route = new MatchedRoute('controller_404:action_index');
    }

    list($class, $action) = explode(':', $route->getController(), 2);

    call_user_func_array(array(new $class($router), $action), $route->getParameters());

} catch (Exception $e) {

    header($_SERVER['SERVER_PROTOCOL'] . ' 500 Internal Server Error', true, 500);

    echo $e->getMessage();
    echo $e->getTraceAsString();
    exit;
}
?>
