<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\User;
use Hash;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        User::insert([
            'name'=>'Admin',
            'email'=>'bk@gmail.com',
            'password'=>Hash::make('bk19876553')
        ]);
    }
}
