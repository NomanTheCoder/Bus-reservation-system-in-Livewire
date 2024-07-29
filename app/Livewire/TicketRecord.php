<?php

namespace App\Livewire;

use App\Models\Ticket;
use Livewire\Attributes\Layout;
use Livewire\Attributes\Title;
use Livewire\Component;
use Livewire\WithPagination;

#[Layout('components.layouts.app')]
#[Title('Tickets Record')]

class TicketRecord extends Component
{
    use WithPagination;
    public function delete($id){
        $tickets =Ticket::findOrFail($id);
        // $this->authorize('delete',$tickets);
        $tickets->delete();

    }


    public function navigateToEdit($id)
{
    $tickets=Ticket::find($id);
    session()->flash('data',$tickets);
   
    return redirect()->to('/tickets?edit=' . $id);
}



   
    public function render()
    {
        return view('livewire.ticket-record',[
            'tickets' => Ticket::orderBy('created_at', 'asc')->paginate(10)
        ]);
    }
}
