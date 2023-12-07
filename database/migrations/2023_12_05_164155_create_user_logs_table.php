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
        Schema::create('user_logs', function (Blueprint $table) {
            $table->id();
            $table->foreignId('user_group_id')->constrained()->cascadeOnDelete()->cascadeOnUpdate();
            $table->string('page_title');
            $table->string('action');
            $table->text('description');
            $table->timestamps();

            // Schema::table('user_logs', function (Blueprint $table) {
            //     $table->foreign('user_group_id')->references('id')->on('user_groups')
            //         ->onDelete('cascade')->onUpdate('cascade');
            // });
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('user_logs');
    }
};
