<?php namespace BlazCigale\RestaurantMenu\Components;

use Cms\Classes\ComponentBase;
use BlazCigale\RestaurantMenu\Models\Allergen;
use BlazCigale\RestaurantMenu\Models\Section;

/**
 * The menu items component.
 *
 * @package blazcigale\restaurantmenu
 * @author BlazCigale
 */
class MenuItems extends ComponentBase
{
    public $sections = [];
    public $allergens = [];

    public function componentDetails()
    {
        return [
            'name'        => 'blazcigale.restaurantmenu::lang.component.menu_items.name',
            'description' => 'blazcigale.restaurantmenu::lang.component.menu_items.description'
        ];
    }
    
    public function defineProperties()
    {
        return [];
    }

    public function onRun()
    {
        $this->sections = Section::with(['items', 'items.allergens'])->get();
        $this->allergens = Allergen::all();
    }
}
