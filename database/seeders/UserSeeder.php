<?php

namespace Database\Seeders;

use App\Models\Admin;
use App\Models\Customer;
use App\Models\AdminProfile;

use App\Models\CustomerProfile;
use App\Models\Role;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {

        $admin = New Admin(
            [
                'first_name' => 'Admin',
                'last_name' => 'Steinhauer',
                'email' => 'kontakt@webseiten-company.de',
                'password' => Hash::make('Nssstar20mkj7!'),
                'created_at' => now(),
                'updated_at' => now(),
            ]
        );
        $admin->save();


/*        $profile = new AdminProfile([
            'admin_id' => $admin->id,
            'phone_number' => '015901966864',
            'street' => 'Carl-Goerdeler-Ring',
            'house_number' => '26',
            'postal' => '38518',
            'city' => 'Gifhorn',
        ]);
        $profile->save();*/

        $customer = New Customer(
            [
                'first_name' => 'Kunde',
                'last_name' => 'Steinhauer',
                'email' => 'customer@webseiten-company.de',
                'password' => Hash::make('Nssstar20mkj7!'),
                'created_at' => now(),
                'updated_at' => now(),
            ]
        );
        $customer->save();


    }
}
