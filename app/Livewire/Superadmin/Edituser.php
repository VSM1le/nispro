<?php

namespace App\Livewire\Superadmin;

use App\Models\User;
use Illuminate\Support\Facades\Hash;
use Livewire\Component;

class Edituser extends Component
{
    public $useredit;
    public $name;
    public $newPassword;
    public $role;
    protected $listeners = ['openModal'];

    
    public function openModal($data)
    {
        if ($data['name'] === 'editUser') {
            $this->useredit = $data['user'];
            $this->dispatch('open-modal', name:'editUser');
             
        }
  
    }

    public function mount(User $useredit)
    {
        $this->useredit = $useredit;
        $this->name = $useredit->name;
        $this->role = $useredit->roles()->pluck('name')->first();
    }
    
    public function updateProfile()
    {
       
    $this->validate([
        'name' => ['nullable', 'string','min:5' ,'max:255'],
        'newPassword' => ['nullable', 'string', 'min:8'],
        'role' => ['nullable'],
    ]);

    if (is_array($this->useredit)) {
        $this->useredit = User::find($this->useredit['id']);
    }
    // dd($this->useredit);
        $userData = [
            'name' => $this->name ? : $this->useredit->name,
            'password' => $this->newPassword ? Hash::make($this->newPassword) : $this->useredit->password,
        ];
        
        $this->useredit->update($userData);

        if (isset($this->role)) {
            $this->useredit->syncRoles([$this->role]);
        }

        $this->dispatch('close-modal');

    }


    public function render()
    {
        $useredit = $this->useredit;
        return view('livewire.superadmin.edituser', compact('useredit'));
    }

}
