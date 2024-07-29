<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Route extends Model

{
    use HasFactory;

    protected $fillable = ['route_name', 'available_seats', 'Total_seats', 'is_active'];
   
    public function tickets()
    {
        return $this->hasMany(Ticket::class);
    }


  
}