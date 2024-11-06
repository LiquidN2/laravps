<?php

namespace App\Livewire\Nav;

use Livewire\Component;

class MobileNav extends Component
{
    public array $navLinks = [];

    public function render()
    {
        return view('livewire.nav.mobile-nav');
    }
}
