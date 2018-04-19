<?php namespace BlazCigale\RestaurantMenu\Components;

use BlazCigale\RestaurantMenu\Models\DailyOffer;
use Carbon\Carbon;
use Cms\Classes\ComponentBase;
use BlazCigale\RestaurantMenu\Models\Allergen;

/**
 * The menu items component.
 *
 * @package blazcigale\restaurantmenu
 * @author BlazCigale
 */
class DisplayAllDailyOffers extends ComponentBase
{
    public $offers = [];
    public $allergens = [];

    public function componentDetails()
    {
        return [
            'name'        => 'Display all daily offers',
            'description' => 'Display all daily offers for debug purposes'
        ];
    }
    
    public function defineProperties()
    {
        return [];
    }

    public function onRun()
    {
        $this->offers = DailyOffer::with('allergens')
            ->get()
            ->groupBy(function($date) {
                return Carbon::parse($date->date)->format('W');
            });

        $this->allergens = Allergen::all();
    }
}
