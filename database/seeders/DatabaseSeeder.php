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
            'password' => '$2y$10$3imDjc04ij27tLRQdkKvluunmz3RKXJeighE0AFUzu/sLScso4KDq',
            'phone' => '1234567890',
            'email' => 'admin@imt.com',
            'role' => 'admin',
            'special_permissions' => '["create", "read", "update", "delete" ]'

        ]);
        User::create([
            'fullname' => 'Abdi Farah Warsame',
            'username' => 'abdifw',
            'password' => '$2y$10$3imDjc04ij27tLRQdkKvluunmz3RKXJeighE0AFUzu/sLScso4KDq',
            'phone' => '1234567890',
            'email' => 'abdi@imt.com',
            'role' => 'manager',
            'special_permissions' => '["create", "read", "update", "delete" ]'

        ]);
        User::create([
            'fullname' => "Jama' Mohamed K'naan",
            'username' => 'jama_knaan',
            'password' => '$2y$10$3imDjc04ij27tLRQdkKvluunmz3RKXJeighE0AFUzu/sLScso4KDq',
            'phone' => '4536728958',
            'email' => 'jama77@imt.com',
            'role' => 'employee',
            'special_permissions' => '["create","read","update"]'

        ]);
        User::create([
            'fullname' => "Wehliye Ahmed Jama",
            'username' => 'wehliye',
            'password' => '$2y$10$3imDjc04ij27tLRQdkKvluunmz3RKXJeighE0AFUzu/sLScso4KDq',
            'phone' => '6437289348',
            'email' => 'wehliye90@imt.com',
            'role' => 'customer',
            'special_permissions' => '["create","read"]'
        ]);
        $names = [
            "female" => ["caasho", "canbaro", "xadiijo", "muna", "kaltuuma"],
            "male" => ["cabdi", "yuusuf", "geedi", "lam"],
        ];

        $usernames = ["hanging", "turtle", "moos"];
        $roles = ["admin", "manager", "employee", "customer"];


        function randder($limit)
        {
            return rand(0, $limit - 1);
        }
        for ($i = 1; $i <= 100; $i++) {
            $usernames_count = count($usernames);
            $usern = $usernames[randder($usernames_count)];
            $username = $usernames[randder($usernames_count)] . "{$i}_" . $usernames[randder($usernames_count)];
            $gender = array_keys($names)[randder(1)];
            $firstname_index = randder(count($names[$gender]));
            $fullname = $names[$gender][$firstname_index] . " " . $names["male"][randder(count($names["male"]))];
            User::create([
                'fullname' => $fullname,
                'username' => $username,
                'password' => '$2y$10$3imDjc04ij27tLRQdkKvluunmz3RKXJeighE0AFUzu/sLScso4KDq',
                'phone' => str_pad(uniqid(), 10, '0', STR_PAD_BOTH),
                'email' => $username . '@example.com',
                'role' => $roles[randder(count($roles))],
                'special_permissions' => '["create", "read"]'
            ]);
        }
    }
}
