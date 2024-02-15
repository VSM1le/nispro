<?php

namespace App\Livewire;

use Livewire\Component;

class Accordionlist extends Component
{

    public $items = [];

    public function mount()
    {
        // Example data; you can replace this with your own data
        $this->items = [
            ['title' => 'Item 1', 'content' => 'Lorem ipsum dolor sit amet.', 'isOpen' => false],
            ['title' => 'Item 2', 'content' => 'Consectetur adipiscing elit.', 'isOpen' => false],
            ['title' => 'Item 3', 'content' => 'Consectetur adipiscing elit.', 'isOpen' => false],
            // Add more items as needed
        ];
    }

    public function toggleItem($index)
    {
    
        $this->items[$index]['isOpen'] = !$this->items[$index]['isOpen'];

    }

    public function render()
    {
        return view('livewire.accordionlist');
    }
}
