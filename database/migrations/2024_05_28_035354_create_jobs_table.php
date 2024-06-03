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
        Schema::create('jobs', function (Blueprint $table) {
            $table->id();
            $table->string('title', 255);
            $table->unsignedBigInteger('company_id');
            $table->unsignedBigInteger('contract_id');
            $table->unsignedBigInteger('posted_by');
            $table->boolean('is_verified')->default(FALSE);
            $table->datetime('expired_date');
            $table->timestamps();

            $table->foreign('posted_by')
                 ->references('id')
                 ->on('users')
                 ->onUpdate('cascade')
                 ->onDelete('no action');

            $table->foreign('company_id')
                 ->references('id')
                 ->on('company')
                 ->onUpdate('cascade')
                 ->onDelete('no action');

            $table->foreign('contract_id')
                  ->references('id')
                  ->on('contract')
                  ->onUpdate('cascade')
                  ->onDelete('no action');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('jobs');
    }
};
