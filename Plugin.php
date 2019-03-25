<?php namespace BlazCigale\RestaurantMenu;

use BlazCigale\RestaurantMenu\Components\DailyOffers;
use BlazCigale\RestaurantMenu\Components\DisplayAllDailyOffers;
use BlazCigale\RestaurantMenu\Components\MenuItems;
use Rebel59\Isogallery\Components\IsoGallery;
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

    public function registerPageSnippets()
    {
        return array_merge($this->registerComponents(), [
            IsoGallery::class => 'isoGallery',
        ]);
    }

    public function registerSettings()
    {
    }
}
