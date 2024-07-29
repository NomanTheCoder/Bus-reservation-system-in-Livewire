<?php

namespace App\Livewire;

use App\Models\Drivers;
use Carbon\Carbon;
use Livewire\Attributes\Layout;
use Livewire\Attributes\Title;
use Livewire\Component;
use Livewire\WithPagination;


#[Layout('components.layouts.app')]
#[Title('Driver Record')]

class DriverRecord extends Component
{
    use WithPagination;

    public function mount()
    {
        $this->updateDriverStatuses();
    }

    public function updateDriverStatuses()
    {
        $drivers = Drivers::all();

        foreach ($drivers as $driver) {
            if ($driver->isLicenseExpired() && $driver->is_active) {
                $driver->is_active = false;
                $driver->save();
            } elseif (!$driver->isLicenseExpired() && !$driver->is_active) {
                $driver->is_active = true;
                $driver->save();
            }
        }
    }
 

    public function delete($driver_id){
        $driver=Drivers::findOrFail($driver_id);
        $driver->delete();
    }

    public function navigateToEdit($driver_id){
        $driver=Drivers::findOrFail($driver_id);
        // session()->flash('data',$driver);
       
        return redirect()->to('/driver?edit='.$driver_id );

    }



    public function render()
    {
       
        return view('livewire.driver-record',[
            'drivers'=>Drivers::orderBy('driver_id','asc')->paginate(10)
        ]);
         
    }
}
