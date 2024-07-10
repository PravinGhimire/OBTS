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
        Schema::create('bus_schedules', function (Blueprint $table) {
            $table->bigIncrements('schedule_id');
            $table->Integer('bus_id');
            $table->Integer('operator_id');
            $table->Integer('source_id');
            $table->Integer('destination_id');
            $table->date('depart_date');
            $table->date('return_date');
            $table->time('depart_time');
            $table->time('return_time');
            $table->string('pickup_address');
            $table->string('dropoff_address');
            $table->boolean('status')->default(0);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('bus_schedules');
    }
};
