<?php

namespace App\Models;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Drivers extends Model
{
    protected $primaryKey = 'driver_id';
    use HasFactory;
    protected $fillable = [
        'name',
        'email',
        'phone_number',
        'license_number',
        'license_expiry_date',
        'address',
        'date_of_birth',
        'emergency_contact_number',
        'years_of_experience',
        'assigned_bus_id',
        'is_active',
        'shift_start_time', 'shift_end_time',
    ];

    public function isLicenseExpired()
    {
        return Carbon::parse($this->license_expiry_date)->isPast();
    }

   
}
