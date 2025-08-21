<?php

namespace App\Http\Livewire\Global\Widgets;

use App\Models\Admin;
use App\Models\Customer;
use Livewire\Component;

class LoginLog extends Component
{
    protected array $last_logins = [];

    public function refresh(): void
    {
        $adminLogins = Admin::with('profile')->get()->map(function ($admin) {
            return [
                'first_name' => $admin->first_name,
                'last_name' => $admin->last_name,
                'last_seen' => $admin->profile->last_seen,
            ];
        });

        $customerLogins = Customer::with('profile')->get()->map(function ($customer) {
            return [
                'first_name' => $customer->first_name,
                'last_name' => $customer->last_name,
                'last_seen' => $customer->profile->last_seen,
            ];
        });

        $this->last_logins = $adminLogins
            ->merge($customerLogins)
            ->sortByDesc('last_seen')
            ->values()
            ->all();
    }

    public function render()
    {
        $this->refresh();

        return view('global.livewire.widgets.login-log', [
            'last_logins' => $this->last_logins
        ]);
    }
}
