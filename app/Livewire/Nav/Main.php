<?php

namespace App\Livewire\Nav;

use Livewire\Component;

class Main extends Component
{
    public array $navLinks = [
        [
            'url' => '/',
            'name' => 'Dashboard',
        ],
        [
            'url' => '/logistics',
            'name' => 'Logistics',
        ],
        [
            'url' => '/orders',
            'name' => 'Orders',
        ],
        [
            'url' => '/customers',
            'name' => 'Customers',
        ],
    ];

    public function render()
    {
        return view('livewire.nav.main');
    }
}
