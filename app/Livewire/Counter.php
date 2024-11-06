<?php

namespace App\Livewire;

use Livewire\Component;

class Counter extends Component
{
    public $counter1;

    public function mount(): void
    {
        $this->counter1 = 0;
    }

    public function increment(): void
    {
        $this->counter1++;
    }

    public function decrement(): void
    {
        $this->counter1--;
    }
}
