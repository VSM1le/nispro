<?php

namespace App\Livewire\Pladmin\CrudPL;

use App\Models\Nissanissue;
use Livewire\Component;

class Filter extends Component
{
    public function render()
    {
        $nissans = Nissanissue::latest()->paginate(10);
        return view('livewire.pladmin.crud-p-l.filter',compact('nissans'));
    }
}
