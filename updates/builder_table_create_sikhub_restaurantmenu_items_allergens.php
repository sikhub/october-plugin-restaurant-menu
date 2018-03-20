<?php namespace Sikhub\RestaurantMenu\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class BuilderTableCreateSikhubRestaurantmenuItemsAllergens extends Migration
{
    public function up()
    {
        Schema::create('sikhub_restaurantmenu_items_allergens', function($table)
        {
            $table->engine = 'InnoDB';
            $table->integer('allergen_id')->unsigned();
            $table->integer('item_id')->unsigned();
        });
    }
    
    public function down()
    {
        Schema::dropIfExists('sikhub_restaurantmenu_items_allergens');
    }
}