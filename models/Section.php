<?php namespace BlazCigale\RestaurantMenu\Models;

use Model;

/**
 * Model
 */
class Section extends Model
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
    public $table = 'blazcigale_restaurantmenu_sections';

    public $hasMany = [
        'items' => Item::class,
    ];
}
