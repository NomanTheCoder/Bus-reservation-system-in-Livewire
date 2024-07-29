<?php


namespace App\Livewire;

use App\Models\User;
use Livewire\Attributes\Layout;
use Livewire\Attributes\Title;
use Livewire\Attributes\Validate;
use Livewire\Component;

#[Layout('components.layouts.app')]
#[Title('Registration')]
class Register extends Component
{
    #[Validate('required')]
    public $name;
    #[Validate('required')]
    public $email;
    #[Validate('required')]
    public $password;
    #[Validate('required')]
    public $password_confirmation;

    public function create(){
        $validated=$this->validate();
        User::create($validated);
        $this->reset();
        session()->flash('success','User Register Successfully!');
    }

    
    public function render()
    {
        return view('livewire.register');
    }
}
