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
class DailyOffers extends ComponentBase
{
    public $offers = [];
    public $allergens = [];

    public function componentDetails()
    {
        return [
            'name'        => 'blazcigale.restaurantmenu::lang.component.daily_offers.name',
            'description' => 'blazcigale.restaurantmenu::lang.component.daily_offers.description'
        ];
    }
    
    public function defineProperties()
    {
        return [];
    }

    public function onRun()
    {
        Carbon::setWeekStartsAt(Carbon::MONDAY);
        Carbon::setWeekEndsAt(Carbon::SUNDAY);

        $now = Carbon::now();
        $weekStart = $now->startOfWeek()->format('Y-m-d');
        $weekEnd = $now->endOfWeek()->format('Y-m-d');

        $this->offers = DailyOffer::where('date', '>=', $weekStart)
            ->where('date', '<=', $weekEnd)
            ->with('allergens')
            ->get()
            ->groupBy(function($date) {
                return Carbon::parse($date->date)->format('l');
            });

        $this->allergens = Allergen::all();
    }
}
