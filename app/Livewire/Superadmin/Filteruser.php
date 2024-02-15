<?php

namespace App\Livewire\Superadmin;
use Livewire\WithPagination;
use App\Models\User;
use Illuminate\Database\Eloquent\Builder;
use Livewire\Component;

class Filteruser extends Component
{
    use WithPagination;
    public string $searchUser = "";
    public User $selectedUser;
    
    public function viewUser(User $user)
    {
        $this->selectedUser = $user;
        $this->dispatch('openModal', ['name' => 'editUser', 'user' => $user]);
    }

    public function render()
    {
        $users = User::select('users.id', 'users.name', 'users.email','users.password')
        ->whereDoesntHave('roles', function (Builder $roleQuery) {
            $roleQuery->where('name', 'superAdmin');
        })
            ->when($this->searchUser !== '', function (Builder $query) {
                $query->where(function (Builder $subquery) {
                    $subquery->where('users.name', 'like', '%' . $this->searchUser . '%')
                        ->orWhere('users.email', 'like', '%' . $this->searchUser . '%')
                        ->orWhereHas('roles', function (Builder $roleQuery) {
                            $roleQuery->where('name', 'like', '%' . $this->searchUser . '%');
                        });
                });
            })->paginate(10);
        return view('livewire.superadmin.filteruser' , compact('users'));
    }
}
