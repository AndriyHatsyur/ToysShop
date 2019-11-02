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
            $table->bigInteger('code')->unique();
            $table->string('name');
            $table->string('slug')->unique();
            $table->string('image');

            $table->float('price');
            $table->float('sale')->nullable();
            $table->float('price_opt')->nullable();
            $table->text('description')->nullable();
            $table->timestamps();
            $table->boolean('in_stock')->default(FALSE);

            $table->string('article')->nullable();
            $table->string('manufacturer')->nullable();;
            $table->string('size')->nullable();;
            $table->string('country')->nullable();;
            $table->string('type')->nullable();;
            $table->bigInteger('category_id')->unsigned()->nullable();
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
