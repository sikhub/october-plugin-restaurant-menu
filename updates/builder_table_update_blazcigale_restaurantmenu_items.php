<?php namespace BlazCigale\RestaurantMenu\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class BuilderTableUpdateBlazCigaleRestaurantmenuItems extends Migration
{
    public function up()
    {
        Schema::table('blazcigale_restaurantmenu_items', function($table)
        {
            $table->string('price', 10)->nullable()->unsigned(false)->default(null)->change();
        });
    }
    
    public function down()
    {
        Schema::table('blazcigale_restaurantmenu_items', function($table)
        {
            $table->double('price', 10, 0)->nullable()->unsigned(false)->default(null)->change();
        });
    }
}
