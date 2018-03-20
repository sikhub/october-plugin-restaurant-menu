<?php namespace BlazCigale\RestaurantMenu\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class BuilderTableCreateBlazcigaleRestaurantmenuDailyOffer extends Migration
{
    public function up()
    {
        Schema::create('blazcigale_restaurantmenu_daily_offer', function($table)
        {
            $table->engine = 'InnoDB';
            $table->increments('id')->unsigned();
            $table->string('name');
            $table->string('price')->nullable();
            $table->date('date');
        });
    }
    
    public function down()
    {
        Schema::dropIfExists('blazcigale_restaurantmenu_daily_offer');
    }
}
