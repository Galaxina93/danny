<?php

namespace App\Http\Livewire\Global\Dashboard;

use Livewire\Component;

class Dashboard extends Component
{
    public $widgets;

    public function render()
    {
        return view('global.livewire.dashboard.dashboard');
    }

}
