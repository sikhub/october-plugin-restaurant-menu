<?php namespace Sikhub\RestaurantMenu\Components;

use Cms\Classes\ComponentBase;
use Sikhub\RestaurantMenu\Models\Section;

/**
 * The menu items component.
 *
 * @package sikhub\restaurantmenu
 * @author Sikhub
 */
class MenuItems extends ComponentBase
{
    public $sections = [];

    public function componentDetails()
    {
        return [
            'name'        => 'sikhub.restaurantmenu::lang.component.menu_items.name',
            'description' => 'sikhub.restaurantmenu::lang.component.menu_items.description'
        ];
    }
    
    public function defineProperties()
    {
        return [];
    }

    public function onRun()
    {
        $this->sections = Section::with('items')->get();
    }
}
