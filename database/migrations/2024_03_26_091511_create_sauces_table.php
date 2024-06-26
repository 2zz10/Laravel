<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateSaucesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('sauces', function (Blueprint $table) {
            $table->id('userId');
            $table->string('name');
            $table->string('manufacturer');
            $table->string('description');
            $table->string('mainPepper');
            $table->string('imageUrl');
            $table->integer('heat');
            $table->integer('likes');
            $table->integer('dislikes');
            $table->json('userLiked');
            $table->json('userDisliked');
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
        Schema::dropIfExists('sauces');
    }
}
