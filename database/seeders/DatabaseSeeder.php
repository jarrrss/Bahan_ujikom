<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\User;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        User::create([
            'name' => 'violet',
            'email' => 'violet4546@gmail.com',
            'password' => bcrypt('violet12345'),
            'namerole' => 'administrator',
            'isrole' => '1', 
        ]);
    }
}
