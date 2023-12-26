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
        Schema::create('manufacturers', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->string('address')->nullable();
            $table->string('phone')->nullable();
            $table->timestamps();
        });

        // Insert example data
        DB::table('manufacturers')->insert([
            ['name' => 'Toyota Motor Corporation', 'address' => 'HQ, Kyoto District, Tokyo, Japan', 'phone' => '+1 800 233 8232'],
            ['name' => 'BMW Group', 'address' => 'HQ, Bavaria State, Berlin, Germany', 'phone' => '+12 234 8552 923'],
        ]);
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('manufacturers');
    }
};
