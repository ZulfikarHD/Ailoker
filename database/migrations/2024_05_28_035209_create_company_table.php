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
        Schema::create('company', function (Blueprint $table) {
            $table->id();
            $table->string('cmp_name');
            $table->string('cmp_address');
            $table->unsignedBigInteger('industry_id');
            $table->text('cmp_size')->nullable();
            $table->string('website')->nullable();
            $table->text('about_us')->nullable();
            $table->string('cmp_logo')->nullable();
            $table->timestamps();

            // Foreign key constraint
            $table->foreign('industry_id')
                  ->references('id')
                  ->on('industry')
                  ->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('company');
    }
};
