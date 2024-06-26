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
        Schema::create('job_education', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('jobs_id');
            $table->string('education', 25);
            $table->timestamps();

            $table->foreign('jobs_id')
                 ->references('id')
                 ->on('jobs')
                 ->onUpdate('cascade')
                 ->onDelete('cascade');

        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('job_education');
    }
};
