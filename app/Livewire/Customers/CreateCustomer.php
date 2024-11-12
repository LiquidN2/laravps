<?php

namespace App\Livewire\Customers;

use App\Models\Customer;
use Livewire\Attributes\Validate;
use Livewire\Component;

class CreateCustomer extends Component
{
    #[Validate('required|min:3')]
    public string $name = '';

    #[Validate('required|numeric|min:1000')]
    public int $code = 0;

    #[Validate('email')]
    public string $email = '';

    #[Validate('string')]
    public string $phone = '';

    public function submit()
    {
        // Validate Form Input
        $validated = $this->validate();

        // Create New User
        try
        {
            Customer::create($validated);
            $this->redirect(route('customers.index'))->withSuccess('Customer created.');
        } catch (\Exception $e)
        {
            dd($e->getMessage());
        }
    }

    public function render()
    {
        return view('livewire.customers.create-customer');
    }
}
