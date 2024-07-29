<?php
use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateDriversTable extends Migration
{
    public function up()
    {
        Schema::create('drivers', function (Blueprint $table) {
            $table->id('driver_id');
            $table->string('name');
           $table->boolean('is_active');
            $table->string('email')->unique();
            $table->string('phone_number')->nullable();
            $table->string('license_number')->unique();
            $table->date('license_expiry_date');
            $table->text('address')->nullable();
            $table->date('date_of_birth')->nullable();
            $table->string('emergency_contact_number')->nullable();
            $table->integer('years_of_experience')->nullable();
            $table->string('assigned_bus_id')->nullable();
            $table->time('shift_start_time')->nullable(); // Adding shift start time
            $table->time('shift_end_time')->nullable(); 
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('drivers');
    }
};