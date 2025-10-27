<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\User;

class UsersSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $users = ['eidarraga', 'lanaidava', 'yeposada'];
        
        foreach ($users as $userName) {
            $user = new User;
            $user->name = $userName;
            $user->email = $userName . '@example.com';
            $user->password = bcrypt('123');
            $user->role_id = 1;
            $user->save();
        }
    }
}
