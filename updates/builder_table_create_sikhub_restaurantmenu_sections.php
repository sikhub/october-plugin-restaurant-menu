<?php namespace BlazCigale\RestaurantMenu\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class BuilderTableCreateBlazCigaleRestaurantmenuSections extends Migration
{
    public function up()
    {
        Schema::create('blazcigale_restaurantmenu_sections', function($table)
        {
            $table->engine = 'InnoDB';
            $table->increments('id')->unsigned();
            $table->string('title');
        });
    }
    
    public function down()
    {
        Schema::dropIfExists('blazcigale_restaurantmenu_sections');
    }
}
