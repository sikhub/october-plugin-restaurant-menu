<?php namespace BlazCigale\RestaurantMenu\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class BuilderTableUpdateBlazcigaleRestaurantmenuItems2 extends Migration
{
    public function up()
    {
        Schema::table('blazcigale_restaurantmenu_items', function($table)
        {
            $table->string('price', 20)->change();
        });
    }
    
    public function down()
    {
        Schema::table('blazcigale_restaurantmenu_items', function($table)
        {
            $table->string('price', 10)->change();
        });
    }
}
