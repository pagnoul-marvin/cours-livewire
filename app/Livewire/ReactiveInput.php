<?php

namespace App\Livewire;

use App\Models\User;
use Illuminate\Contracts\View\Factory;
use Illuminate\Contracts\View\View;
use Illuminate\Foundation\Application;
use Livewire\Component;

class ReactiveInput extends Component
{
    public $name = '';
    public $user;

    public function mount(): void
    {
        $this->user = User::whereEmail('johndoe@example.com')->first();
    }

    public function render(): Application|Factory|View|\Illuminate\View\View
    {
        $user = $this->user;

        return view('livewire.reactive-input', compact('user'));
    }
}
