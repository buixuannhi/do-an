<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class Products extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('products', function (Blueprint $table) {
            $table->id();
            $table->string('name',30);
            $table->integer('cat_id');
            $table->integer('brand_id');
            $table->string('image',255);
            $table->integer('price');
            $table->integer('price_sale');
            // $table->integer('side_id');
            // $table->integer('color_id');
            $table->text('description');
            $table->tinyInteger('status');
            $table->timestamps();
        });
    
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        //
    }
}
