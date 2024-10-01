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
        Schema::create('residence_card', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->string('from_price')->nullable();
            $table->string('to_price')->nullable();
            $table->text('description')->nullable();
            $table->string('slug')->nullable();
            $table->rememberToken();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        //
    }
};
