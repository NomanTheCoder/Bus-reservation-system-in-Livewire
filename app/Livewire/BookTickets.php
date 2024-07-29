<?php

namespace App\Livewire;

use App\Models\Ticket;
use App\Models\Route;

use Livewire\Attributes\Layout;
use Livewire\Attributes\Title;
use Livewire\Component;

use Illuminate\Validation\Rule;

#[Layout('components.layouts.app')]
#[Title('Ticket Booking')]

class BookTickets extends Component
{
    public $ticket_number;
    public $route_name;
    public $route_id;
    public $customer_name;
    public $customer_cnic;
    public $departure_city;
    public $departure_date;
    public $destination_city;
    public $destination_arrival_time;
    public $price;
    public $category;
    public $ticket_confirm = false;
    // public $Total_seats;
    public $available_seats;
    public $routeError;
    public $isEdit = false; 
    public $editId;

    public function mount(){
        $this->editId = request()->query('edit', null);
        if ($this->editId) {
            $ticket = Ticket::findOrFail($this->editId);
            $this->ticket_number = $ticket->ticket_number;
            $this->route_name = $ticket->route_name;
            $this->customer_name = $ticket->customer_name;
            $this->customer_cnic = $ticket->customer_cnic;
            $this->departure_city = $ticket->departure_city;
            $this->departure_date = $ticket->departure_date;
            $this->destination_city = $ticket->destination_city;
            $this->destination_arrival_time = $ticket->destination_arrival_time;
            $this->price = $ticket->price;
            $this->category = $ticket->category;
            $this->available_seats = $ticket->available_seats;
            $this->ticket_confirm = $ticket->ticket_confirm;

            session()->flash('update', 'Update Ticket Record');
            $this->isEdit = true;
        }
    }

    protected $rules = [
        'ticket_number' => 'required',
        'route_name' => 'required',
        'customer_name' => 'required',
        'customer_cnic' => 'required',
        'departure_city' => 'required',
        'departure_date' => 'required|date',
        'destination_city' => 'required',
        'destination_arrival_time' => 'required|date',
        'price' => 'required|numeric',
        'category' => 'required',
        'ticket_confirm' => 'required|boolean',
    ];

    public function updatedRouteName()
{
    $route = Route::where('route_name', $this->route_name)->first();

    if ($route) {
        $this->route_id = $route->id;
        // $this->Total_seats = $route->Total_seats;
        $this->available_seats = $route->available_seats;
        $this->routeError = null;
    } else {
        $this->routeError = 'Route does not exist.';
        // $this->Total_seats = null;
        $this->available_seats = null;
    }
}

    public function checkRouteName()
    {
        $this->updatedRouteName();
    }

    public function submitForm()
    {
        $validated = $this->validate();

        if (!$this->route_id) {
            $this->addError('route_name', 'Invalid route name.');
            return;
        }

        // Update available seats
        $route = Route::find($this->route_id);
        if ($route->available_seats <= 0) {
            $this->addError('route_name', 'No available seats for this route.');
            return;
        }

        $route->available_seats -= 1;
        $route->save();

        $validated['route_id'] = $this->route_id;
        // $validated['Total_seats'] = $this->Total_seats;
        $validated['available_seats'] = $route->available_seats;
        unset($validated['route_name']);

        if ($this->editId) {
            $ticket = Ticket::findOrFail($this->editId);
            $ticket->update($validated);
            session()->flash('update', 'Ticket Record Updated Successfully');
            return redirect('/record');
         
          
        }else{

        Ticket::create($validated);}

        $this->reset();
        session()->flash('success', 'Ticket Booked Successfully.');
        return redirect('/status');
    }


 public function render()
    {
        return view('livewire.book_tickets');
    }
}