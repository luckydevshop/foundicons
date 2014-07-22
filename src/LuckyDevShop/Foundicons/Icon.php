<?php namespace LuckyDevShop\Foundicons;

class Icon
{
    public static function __callStatic($methodName, $params)
    {
        $iconName = implode("-", explode("_", strtolower($methodName)));
        $classes = implode(" ", $params);

        return sprintf('<i class="fi-%s %s"></i>', $iconName, $classes);
    }

    public static function make($classes, $attributes = [])
    {
        return static::__callStatic($classes, $attributes);
    }
}
