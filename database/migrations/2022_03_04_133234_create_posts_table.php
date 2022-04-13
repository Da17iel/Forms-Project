<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('posts', function (Blueprint $table) {
            $table->id();
            $table->string("IconPath");
            $table->foreignId('user_id')->nullable()->constrained();
            $table->string("title")->unique();
            $table->string("slug")->unique();
            $table->string("description");
            $table->longText("content");
            $table->integer('replies');
            $table->integer("views");
            $table->foreignId('category_id')->constrained();
            $table->date("creationDate");
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
        Schema::dropIfExists('posts');
    }
};
