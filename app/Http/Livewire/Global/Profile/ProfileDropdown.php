<?php

namespace App\Http\Livewire\Global\Profile;

use Livewire\Component;
use Illuminate\Support\Facades\Auth;

class ProfileDropdown extends Component
{
    public function render()
    {
        $guard = (new \App\Models\User)->getGuard();
        $user = Auth::guard($guard)->user();

        return view('global.livewire.profile.profile-dropdown', compact('guard', 'user'));
    }

    public function logout()
    {
        $guard = (new \App\Models\User)->getGuard();
        Auth::guard($guard)->logout();
        return redirect('/');
    }

}
