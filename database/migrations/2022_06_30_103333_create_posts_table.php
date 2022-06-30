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
            // posted_by, title, caption, image, interests<array>, active
            $table->id();
            $table->foreignId('posted_by');
            $table->string('title')->nullable();
            $table->string('caption')->nullable();
            $table->string('image')->nullable();
            $table->json('interests')->default([]);
            $table->boolean('active')->default(true);
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
