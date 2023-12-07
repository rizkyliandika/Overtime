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
        Schema::create('user_management', function (Blueprint $table) {
            $table->id();
            $table->bigInteger('user_group_id')->unsigned();
            $table->string('username');
            $table->string('name');
            $table->timestamps();
        });

        Schema::table('user_management', function (Blueprint $table) {
            $table->foreign('user_group_id')->references('id')->on('user_groups')
                ->onDelete('cascade')->onUpdate('cascade');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('user_management');
    }
};
