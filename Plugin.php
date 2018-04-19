<?php namespace BlazCigale\RestaurantMenu;

use BlazCigale\RestaurantMenu\Components\DailyOffers;
use BlazCigale\RestaurantMenu\Components\DisplayAllDailyOffers;
use BlazCigale\RestaurantMenu\Components\MenuItems;
use System\Classes\PluginBase;

class Plugin extends PluginBase
{
    public function registerComponents()
    {
        return [
            MenuItems::class => 'menuItems',
            DailyOffers::class => 'dailyOffers',
            DisplayAllDailyOffers::class => 'displayAllDailyOffers',
        ];
    }

    public function registerSettings()
    {
    }
}
