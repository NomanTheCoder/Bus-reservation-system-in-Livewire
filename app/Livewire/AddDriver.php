<?php

namespace App\Livewire;

use App\Models\Drivers;
use Carbon\Carbon;
use Livewire\Attributes\Layout;
use Livewire\Attributes\Title;
use Livewire\Component;

#[Layout('components.layouts.app')]
#[Title('Driver Registration')]

class AddDriver extends Component
{

    public $name;
    public $email;
    public $phone_number;
    public $license_number;
    public $license_expiry_date;
    public $address;
    public $date_of_birth;
    public $emergency_contact_number;
    public $years_of_experience;
    public $assigned_bus_id;
    public $is_active = '';
    public $editId;
    public $shift_start_time;
    public $shift_end_time;
    public $isEdit = false; 

    public function mount(){
        $this->editId = request()->query('edit', null);
        if($this->editId){
            $driver = Drivers::findOrFail($this->editId);
            $this->name = $driver->name;
            $this->email = $driver->email;
            $this->phone_number = $driver->phone_number;
            $this->license_number = $driver->license_number;
            $this->license_expiry_date = $driver->license_expiry_date;
            $this->address = $driver->address;
            $this->date_of_birth = $driver->date_of_birth;
            $this->emergency_contact_number = $driver->emergency_contact_number;
            $this->years_of_experience = $driver->years_of_experience;
            $this->assigned_bus_id = $driver->assigned_bus_id;
            $this->is_active = $driver->is_active;
            $this->shift_start_time = $driver->shift_start_time;
            $this->shift_end_time = $driver->shift_end_time;

            $this->isEdit = true;
        }
    }

    protected $rules = [
        'name' => 'required|string|max:255',
        'email' => 'required|email|max:255',
        'phone_number' => 'required|string|max:15',
        'license_number' => 'required|string|max:50',
        'license_expiry_date' => 'required|date',
        'address' => 'required|string|max:255',
        'date_of_birth' => 'required|date|before:2006-01-01',
        'emergency_contact_number' => 'required|string|max:15',
        'years_of_experience' => 'required|integer|min:0',
        'assigned_bus_id' => 'required|string|max:50',
        'is_active' => 'required|boolean',
       'shift_start_time' => 'required|date_format:H:i',
'shift_end_time' => 'required|date_format:H:i',

    ];

 
    public function create(){
        $validated = $this->validate();

      
        if($this->editId) {
            $driver = Drivers::findOrFail($this->editId);
            $driver->update($validated); 
            session()->flash('success', 'Driver Updated Successfully.');
        } else {
            Drivers::create($validated); 
            session()->flash('success', 'New Driver Added Successfully.');
            $this->reset(); 
        }

        return redirect('/info');
    }
        public function render()
    {
        return view('livewire.add-driver');
    }
}
