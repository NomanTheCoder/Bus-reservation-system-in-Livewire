<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Ticket extends Model
{
    use HasFactory;

    protected $fillable = [
        'ticket_number', 'route_id', 'customer_name', 'customer_cnic', 'departure_city',
        'departure_date', 'destination_city', 'destination_arrival_time', 'price',
        'category', 'ticket_confirm', 'Total_seats', 'available_seats'
    ];
    public function route()
    {
        return $this->belongsTo(Route::class);
    }
}
