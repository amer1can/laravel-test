<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateArticleModelsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('article_models', function (Blueprint $table) {
            $table->id();
            $table->string('title');
            $table->text('text');
            $table->string('min_image');
            $table->string('image');
            $table->integer('views');
            $table->integer('likes');
            $table->string('theme_comment')->nullable(true);
            $table->text('comment')->nullable(true);
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
        Schema::dropIfExists('article_models');
    }
}
