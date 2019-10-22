<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateProduktTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('products', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('name');
            $table->string('slug')->unique();
            $table->string('image');

            $table->float('price');
            $table->float('sale')->nullable();
            $table->text('description');
            $table->timestamps();
            $table->boolean('in_stock')->default(TRUE);

            $table->string('article');
            $table->string('manufacturer')->nullable();;
            $table->string('size')->nullable();;
            $table->string('country')->nullable();;
            $table->string('type')->nullable();;
            $table->bigInteger('category_id')->unsigned();
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
