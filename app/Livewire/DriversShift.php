<?php

namespace App\Livewire;

use App\Models\Drivers;
use Carbon\Carbon;
use Livewire\Component;
use Livewire\WithPagination;

class DriversShift extends Component
{
    use WithPagination;
    
    public function render()
    {
        
        $now =Carbon::now()->format('H:i');


            $drivers =Drivers::where('is_active', true)
            ->whereTime('shift_start_time', '<=', $now)
            ->whereTime('shift_end_time', '>=',$now)
            ->orderBy('driver_id', 'asc')
            ->paginate(10);

        return view('livewire.drivers-shift', compact('drivers'));

    }
}
