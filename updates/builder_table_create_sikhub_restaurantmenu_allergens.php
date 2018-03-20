<?php namespace BlazCigale\RestaurantMenu\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class BuilderTableCreateBlazCigaleRestaurantmenuAllergens extends Migration
{
    public function up()
    {
        Schema::create('blazcigale_restaurantmenu_allergens', function($table)
        {
            $table->engine = 'InnoDB';
            $table->increments('id')->unsigned();
            $table->string('name');
            $table->string('code');
        });
    }
    
    public function down()
    {
        Schema::dropIfExists('blazcigale_restaurantmenu_allergens');
    }
}
