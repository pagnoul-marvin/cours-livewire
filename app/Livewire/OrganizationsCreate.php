<?php

namespace App\Livewire;

use App\Exceptions\OrganizationException;
use App\Livewire\Forms\OrganizationForm;
use App\Models\Account;
use Illuminate\Validation\ValidationException;
use Livewire\Component;


class OrganizationsCreate extends Component
{
    public $account;
    public $feedback = '';
    public OrganizationForm $form;
    public $isOpen = false;
    protected $listeners = ['openModal' => 'openModal', 'closeModal' => 'closeModal'];

    public function mount()
    {
        $this->account = Account::whereName('Acme Corporation')->first();
    }

    public function save()
    {
        try {
            $this->form->store();
        } catch (OrganizationException $e) {
            throw ValidationException::withMessages($e->getPrevious()?->errors());
        }
        $this->form->reset();
        $this->feedback = 'The Organization has been created';
        $this->dispatch('organization-created');
    }

    public function openModal()
    {
        $this->isOpen = true;
    }

    public function closeModal()
    {
        $this->isOpen = false;
    }
}
