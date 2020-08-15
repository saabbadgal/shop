<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;


class CreateProductsTable extends Migration
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
            $table->string('primary_image',255);
            $table->string('name',255);
            $table->string('model',255)->nullable();
            $table->string('slug',255);
            $table->string('color',255);
            $table->bigInteger('price');
            $table->bigInteger('discountPrice')->nullable();
            $table->string('idealFor',99)->nullable();  
            $table->bigInteger('stock');  
            $table->text('outerMaterial',99)->nullable();  
            $table->text('soleMaterial',99)->nullable();
            $table->text('upperPattern',99)->nullable();
            $table->text('description'); 
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
        Schema::dropIfExists('products');
    }
}
