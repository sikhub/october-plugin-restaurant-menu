<?php namespace Sikhub\RestaurantMenu;

use Sikhub\RestaurantMenu\Components\MenuItems;
use System\Classes\PluginBase;

class Plugin extends PluginBase
{
    public function registerComponents()
    {
        return [
            MenuItems::class => 'menuItems',
        ];
    }

    public function registerSettings()
    {
    }
}
