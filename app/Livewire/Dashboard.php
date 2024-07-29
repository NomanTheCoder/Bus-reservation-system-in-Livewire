<?php

namespace App\Livewire;

use App\Models\Drivers;
use App\Models\Route;
use App\Models\Sales;
use App\Models\Ticket;
use Livewire\Attributes\Layout;
use Livewire\Component;



class Dashboard extends Component
{
    public $availableTickets;
    public $totalRoutes;
    public $activeRoutes;
    public $totalSales;
    public $totalDrivers;
    public $activeDrivers;

    public function mount()
    {
        $this->fetchData();
    }

    public function fetchData()
    {
        $this->availableTickets = Ticket::where('available_seats', true)->count();
        $this->totalRoutes = Route::count();
        $this->activeRoutes = Route::where('is_active', true)->count();
        $this->totalSales = Sales::sum('amount');
        $this->totalDrivers = Drivers::count();
        $this->activeDrivers = Drivers::where('is_active', true)->count();
    }

    public function render()
    {
        return view('livewire.dashboard')->layout('components.layouts.app', ['title' => 'Dashboard']);
    }
}