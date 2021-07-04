<?php

class Routes
{
    public static array $validRoutes = [];

    public static function set($route, $function)
    {
        self::$validRoutes[] = $route;


        if ($_SERVER['REQUEST_URI'] == $route)
        {
            print($_SERVER['REQUEST_URI']);
            $function->__invoke();
        }
    }
}
