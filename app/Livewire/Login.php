<?php

namespace App\Livewire;

use Livewire\Attributes\Layout;
use Livewire\Attributes\Title;
use Livewire\Attributes\Validate;
use Livewire\Component;
use Auth;

#[Layout('components.layouts.app')]
#[Title('Login')]
class Login extends Component
{
    #[Validate('required')]
    public $email;
    #[Validate('required')]
    public $password;

    public function Login(){
        $validated =$this->validate();
        if(Auth::attempt($validated)){
            $this->reset();
            session()->flash('Login','Login Successfully');
            return redirect('/tickets');

        }else{
            session()->flash('Error', 'The provided credentials are invalid.');
            // $this->reset();
            
        }
    }
    public function render()
    {
        return view('livewire.login');
    }
}
