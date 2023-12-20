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
        Schema::create('request_overtimes', function (Blueprint $table) {
            $table->id();
            $table->date("date");
            $table->string("start_time");
            $table->string("end_time");
            $table->string("type");
            $table->string("status")->default("In Progress");
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('request_overtimes');
    }
};
