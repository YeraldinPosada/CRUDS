<?php

namespace Database\Seeders;

use App\Models\Role;
use Illuminate\Database\Seeder;

class RolesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $roles = ['admin', 'user', 'guest'];
        
        foreach ($roles as $roleName) {
            $role = new Role;
            $role->name = $roleName;
            $role->save();
        }
    }
}
