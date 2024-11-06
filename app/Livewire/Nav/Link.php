<?php

namespace App\Livewire\Nav;

use Livewire\Component;

class Link extends Component
{
    public bool $active = false;
    public bool $isMobile = false;
    public string $href = '';
    public string $name = '';

    public function mount()
    {
        $this->active = $this->href == '/'
            ? request()->routeIs('dashboard')
            : "/" . request()->path() == $this->href;
    }

    public function render()
    {
        return view('livewire.nav.link');
    }
}
