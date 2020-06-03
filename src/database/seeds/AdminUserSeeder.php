<?php

use Illuminate\Database\Seeder;
use App\User;

class AdminUserSeeder extends Seeder
{
    /**
     * Run the database seeds for the users table.
     *
     * @return void
     */
    public function run()
    {
        factory(User::class)->state('admin')->create();
    }
}
