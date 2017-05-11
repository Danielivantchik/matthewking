<?php

use App\User;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
         $this->call(UsersTableSeeder::class);
    }
}

class UsersTableSeeder extends Seeder
{
    public function run()
    {
        User::create([
            'name' => 'Matthew King',
            'email' => 'matthew.king@ibethel.org',
            'password' => bcrypt('psalm91'),
            'facebook' => 'https://www.facebook.com/evangelistmattking',
            'instagram' => 'https://www.instagram.com/mattking38'
        ]);
    }
}
