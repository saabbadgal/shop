<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateOrderAddressTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('order_address', function (Blueprint $table) {
            $table->id();
            $table->string('name',40)->nullable();
            $table->string('address',150)->nullable();
            $table->string('city',20)->nullable();
            $table->string('state',20)->nullable();
            $table->bigInteger('pin')->nullable();
            $table->string('country',20)->nullable();
            $table->string('phone',15)->nullable(); 
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
        Schema::dropIfExists('order_address');
    }
}
