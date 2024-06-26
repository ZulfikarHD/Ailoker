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
        Schema::create('company_social_media', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('company_id');
            $table->unsignedBigInteger('social_media_id');
            $table->string('link');
            $table->timestamps();

            // Foreign key constraints
            $table->foreign('company_id')
                  ->references('id')
                  ->on('company')
                  ->onUpdate('cascade')
                  ->onDelete('cascade');

            $table->foreign('social_media_id')
                  ->references('id')->on('social_media')
                  ->onUpdate('cascade')
                  ->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('company_social_media');
    }
};
