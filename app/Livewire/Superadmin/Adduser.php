<?php

namespace App\Livewire\Superadmin;

use App\Models\User;
use Illuminate\Support\Facades\Hash;
use Livewire\Component;

class Adduser extends Component
{

    public $name;
    public $email;
    public $password;
    public $selectedRoles;

    public function render()
    {
        return view('livewire.superadmin.adduser');
    }


    public function createUser()
    {
        $this->validate([
            'name' => 'required|string',
            'email' => 'required|email|unique:users,email',
            'password' => 'required|min:6',
            'selectedRoles' => 'required',
        ]);

        $user = User::create([
            'name' => $this->name,
            'email' => $this->email,
            'password' => Hash::make($this->password),
        ]);

        // Assign selected roles to the newly created user
        $user->assignRole($this->selectedRoles);

        // Reset the input fields after creating the user
        $this->reset();
        $this->dispatch('close-modal');
    }
}
