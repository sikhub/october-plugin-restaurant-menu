<?php namespace BlazCigale\RestaurantMenu\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class BuilderTableCreateBlazCigaleRestaurantmenuItemsAllergens extends Migration
{
    public function up()
    {
        Schema::create('blazcigale_restaurantmenu_items_allergens', function($table)
        {
            $table->engine = 'InnoDB';
            $table->integer('allergen_id')->unsigned();
            $table->integer('item_id')->unsigned();
        });
    }
    
    public function down()
    {
        Schema::dropIfExists('blazcigale_restaurantmenu_items_allergens');
    }
}