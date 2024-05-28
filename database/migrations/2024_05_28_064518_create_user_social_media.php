<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('user_social_media', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('user_id');
            $table->unsignedBigInteger('social_media_id');
            $table->string('link');
            $table->timestamps();

            $table->foreign('user_id')
                 ->references('id')
                 ->on('users')
                 ->onUpdate('cascade')
                 ->onDelete('cascade');

            $table->foreign('social_media_id')
                 ->references('id')
                 ->on('social_media')
                 ->onUpdate('cascade')
                 ->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('user_social_media');
    }
};
