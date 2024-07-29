<?php

namespace App\Livewire;

use App\Models\Ticket;
use Carbon\Carbon;
use Livewire\Component;
use Auth;

class Status extends Component
{   public $tickets;

    public function mount()
    {
        // Fetch tickets for the authenticated user and future arrival times
        $this->tickets = Ticket::with('route')
                               ->where('id', Auth::id())  // Use 'user_id' instead of 'id'
                               ->where('destination_arrival_time', '>=', Carbon::now())
                               ->get();
    }

    public function render()
    {
        return view('livewire.status', ['tickets' => $this->tickets]);
    }
}