<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateNewsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('news', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('name')->nullable();
            $table->string('slug')->nullable();
            $table->integer('category_id')->default(0)->index();
            $table->integer('author_id')->default(0)->index();
            $table->tinyInteger('active')->default(1)->index();
            $table->tinyInteger('hot')->default(0);
            $table->integer('view')->default(0);
            $table->string('avatar')->nullable();
            $table->string('description')->nullable();
            $table->string('description_seo')->nullable();
            $table->longText('content')->nullable();
            $table->string('title_seo')->nullable();
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
        Schema::dropIfExists('news');
    }
}
