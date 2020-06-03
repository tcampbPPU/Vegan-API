<?php

use Illuminate\Database\Seeder;
use App\User;
use Faker\Generator as Faker;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds for the users table.
     *
     * @return void
     */
    public function run()
    {
        // ? Adding extra piviot table record and I'm not sure why
        // factory(User::class)->state('admin')->create();

        // Create Admin Account
        User::create([
            'first_name'        => 'Admin',
            'last_name'         => 'User',
            'email'             => 'admin@user.com',
            'email_verified_at' => now(),
            'password'          => '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi', // password
            'remember_token'    => Str::random(10),
            'timezone'          => 'America/New_York'
        ])->roles()->attach(1);

        factory(User::class, 100)->create();   
    }
}
