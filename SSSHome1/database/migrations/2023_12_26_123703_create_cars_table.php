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
        Schema::create('cars', function (Blueprint $table) {
            $table->id();
            $table->string('model');
            $table->string('year');
            $table->string('salesperson_email');
            $table->foreignId('manufacturer_id')->constrained('manufacturers');
            $table->timestamps();
        });

        DB::table('cars')->insert([
            ['model' => 'Camry', 'year' => '2010', 'salesperson_email' => 'joe@carozza.com', 'manufacturer_id' => 1],
            ['model' => 'Hilux', 'year' => '2020', 'salesperson_email' => 'mary@carozza.com', 'manufacturer_id' => 1],
            ['model' => '330i', 'year' => '2021', 'salesperson_email' => 'joe@carozza.com', 'manufacturer_id' => 2],
        ]);
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('cars');
    }
};
