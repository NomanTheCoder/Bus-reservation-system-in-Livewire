<?php

namespace App\Livewire;

use App\Models\Route;
use Livewire\Attributes\Layout;
use Livewire\Attributes\Title;
use Livewire\Component;

#[Layout('components.layouts.app')]
#[Title('Routes Assigning')]

class RouteAsign extends Component
{
    public $route_name;
    public $available_seats;
    public $Total_seats;
    public $is_active;

    public $rules = [
        'route_name' => 'required',
        'available_seats' => 'required|integer',
        'Total_seats' => 'required|integer',
        'is_active' => 'required|boolean',
    ];

    public function CreateRoute()
    {
        $validated = $this->validate();
        Route::create($validated);
        $this->reset();
        session()->flash('success', 'Route Created Successfully.');
    }

    public function render()
    {
        return view('livewire.route-asign');
    }
}
