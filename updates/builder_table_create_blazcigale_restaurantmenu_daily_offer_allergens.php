<?php namespace BlazCigale\RestaurantMenu\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class BuilderTableCreateBlazcigaleRestaurantmenuDailyOfferAllergens extends Migration
{
    public function up()
    {
        Schema::create('blazcigale_restaurantmenu_daily_offer_allergens', function($table)
        {
            $table->engine = 'InnoDB';
            $table->integer('allergen_id')->unsigned();
            $table->integer('offer_id')->unsigned();
        });
    }
    
    public function down()
    {
        Schema::dropIfExists('blazcigale_restaurantmenu_daily_offer_allergens');
    }
}
