<?php

namespace App\Http\Livewire\Global\Crud;

class AdminCrud extends UniversalCrud
{
    public function mount(string $configClass = null): void
    {
        parent::mount('crud\\AdminConfig');
    }
}
