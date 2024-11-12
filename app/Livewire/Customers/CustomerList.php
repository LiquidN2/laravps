<?php

namespace App\Livewire\Customers;

use App\Models\Customer;
use Livewire\Component;

class CustomerList extends Component
{
    public array $customers = [];

    public function mount()
    {
        $this->customers = Customer::all()->toArray()->paginate(5);
    }

    public function render()
    {
        return view('livewire.customers.customer-list');
    }
}
