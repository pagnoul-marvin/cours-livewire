<?php

namespace App\Livewire;

use App\Livewire\Forms\OrganizationForm;
use App\Models\Organization;
use Livewire\Component;

class OrganizationsEdit extends Component
{
    public $organization;
    public $feedback = '';
    public OrganizationForm $form;

    public function mount(Organization $organization)
    {
        $this->organization = $organization;
        $this->organization->load('contacts');
        $this->form->setOrganization($organization);
    }

    public function save()
    {
        $this->form->update();
        $this->feedback = 'The Organization has been updated';
        $this->dispatch('organization-updated');
    }

    public function destroy(){
        $this->form->destroy();
        return to_route('organizations.show');
    }
}
