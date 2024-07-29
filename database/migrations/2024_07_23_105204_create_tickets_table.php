<?php
use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTicketsTable extends Migration
{
    public function up()
    {
        Schema::create('tickets', function (Blueprint $table) {
            $table->id();
            $table->string('ticket_number');
            $table->foreignId('route_id')->constrained('routes');
            $table->integer('available_seats');
            $table->string('customer_name');
            $table->string('customer_cnic');
            $table->dateTime('departure_date'); 
            $table->string('departure_city');
            $table->string('destination_city');
            $table->dateTime('destination_arrival_time'); 
            $table->enum('ticket_confirm', ['Yes', 'No', 'Pending'])->default('Pending');
            $table->decimal('price', 8, 2); 
            $table->string('category');

            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('tickets');
    }
}


