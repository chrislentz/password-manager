<?php

use Illuminate\Database\Seeder;
use App\Models\UserRole;

class UsersRolesTableSeeder extends Seeder {

    public function run() {
        DB::table('users_roles')->delete();

        UserRole::create(['id' => 1, 'label' => 'Administrator']);
        UserRole::create(['id' => 2, 'label' => 'Full Member']);
        UserRole::create(['id' => 3, 'label' => 'Restricted Member']);
    }

}