<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use App\Models\User;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        // \App\Models\User::factory(10)->create();

        // \App\Models\User::factory()->create([
        //     'name' => 'Test User',
        //     'email' => 'test@example.com',
        // ]);

        User::create([
            'fullname' => 'Admin Ad_min MinAd',
            'username' => 'admin',
            'password' => 'admin',
            'phone' => '1234567890',
            'email' => 'admin@imt.com',
            'role' => 'admin',
            'special_permissions' => '["create", "read", "update", "delete" ]'

        ]);
        User::create([
            'fullname' => 'Abdi Farah Warsame',
            'username' => 'abdifw',
            'password' => Hash::make('passcode'),
            'phone' => '1234567890',
            'email' => 'abdi@imt.com',
            'role' => 'admin',
            'special_permissions' => '["create", "read", "update", "delete" ]'

        ]);
        User::create([
            'fullname' => "Jama' Mohamed K'naan",
            'username' => 'jama_knaan',
            'password' => Hash::make('passcode'),
            'phone' => '4536728958',
            'email' => 'jama77@imt.com',
            'role' => 'manager',
            'special_permissions' => '["create","read","update"]'

        ]);
        User::create([
            'fullname' => "Wehliye Ahmed Jama",
            'username' => 'wehliye',
            'password' => Hash::make('passcode'),
            'phone' => '6437289348',
            'email' => 'wehliye90@imt.com',
            'role' => 'employee',
            'special_permissions' => '["create","read"]'
        ]);
    }
}
