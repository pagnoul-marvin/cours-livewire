<?php

namespace App\Livewire\Forms;

use App\Exceptions\OrganizationException;
use App\Models\Account;
use App\Models\Organization;
use Livewire\Attributes\Validate;
use Livewire\Form;
use Nette\Schema\ValidationException;

class OrganizationForm extends Form
{
    #[Validate]
    public $name;

    #[Validate]
    public $email;
    #[Validate]
    public $phone;
    #[Validate]
    public $address;
    #[Validate]
    public $city;
    #[Validate]
    public $country;
    #[Validate]
    public $postal_code;
    #[Validate]
    public $region;
    #[Validate]
    public $organization;

    public $account_id;

    public function rules()
    {
        return [
            'name' => ['required', 'max:100'],
            'email' => ['email', 'max:50', 'nullable'],
            'phone' => ['max:50'],
            'address' => ['max:150'],
            'city' => ['max:50'],
            'country' => ['max:2'],
            'postal_code' => ['max:25'],
            'region' => ['max:50'],
        ];
    }

    public function setOrganization(Organization $organization)
    {
        $this->organization = $organization;
        $this->name = $organization->name;
        $this->email = $organization->email;
        $this->phone = $organization->phone;
        $this->address = $organization->address;
        $this->city = $organization->city;
        $this->country = $organization->country;
        $this->postal_code = $organization->postal_code;
        $this->region = $organization->region;
        $this->account_id = $organization->account_id;
    }

    public function update()
    {
        $this->validate();
        $this->organization->update($this->except('organization'));
    }

    public function store()
    {
        $this->account_id = Account::whereName('Acme Corporation')->first()->id;
        try {
            $this->validate();
        } catch (ValidationException $exception) {
            throw new OrganizationException('invalid-data-for-organization', 0, $exception);
        }
        Organization::create($this->all());
    }

    public function destroy()
    {
        $this->organization->delete();
    }
}
