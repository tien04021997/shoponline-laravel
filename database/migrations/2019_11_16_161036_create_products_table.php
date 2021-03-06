<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

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
            $table->bigIncrements('id');
            $table->string('name')->nullable();
            $table->string('slug')->nullable();
            $table->integer('category_id')->default(0)->index();
            $table->integer('price')->default(0);
            $table->tinyInteger('sale')->default(0);
            $table->integer('author_id')->default(0)->index();
            $table->tinyInteger('active')->default(1)->index();
            $table->tinyInteger('hot')->default(0);
            $table->integer('view')->default(0);
            $table->string('avatar')->nullable();
            $table->string('description')->nullable();
            $table->longText('content')->nullable();
            $table->string('title_seo')->nullable();
            $table->string('description_seo')->nullable();
            $table->string('keyword_seo')->nullable();
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
