<?php namespace Sikhub\RestaurantMenu\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class BuilderTableCreateSikhubRestaurantmenuAllergens extends Migration
{
    public function up()
    {
        Schema::create('sikhub_restaurantmenu_allergens', function($table)
        {
            $table->engine = 'InnoDB';
            $table->increments('id')->unsigned();
            $table->string('name');
            $table->string('code');
        });
    }
    
    public function down()
    {
        Schema::dropIfExists('sikhub_restaurantmenu_allergens');
    }
}
