<?php namespace BlazCigale\RestaurantMenu\Models;

use Model;

/**
 * Model
 */
class Item extends Model
{
    use \October\Rain\Database\Traits\Validation;
    
    /*
     * Disable timestamps by default.
     * Remove this line if timestamps are defined in the database table.
     */
    public $timestamps = false;

    /**
     * @var array Validation rules
     */
    public $rules = [
    ];

    /**
     * @var string The database table used by the model.
     */
    public $table = 'blazcigale_restaurantmenu_items';

    public $belongsTo = [
        'section' => Section::class,
    ];

    public $belongsToMany = [
        'allergens' => [
            Allergen::class,
            'table' => 'blazcigale_restaurantmenu_items_allergens',
            'key' => 'item_id',
            'otherKey' => 'allergen_id',
        ],
    ];
}
