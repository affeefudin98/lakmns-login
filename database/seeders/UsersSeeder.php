<?php

namespace Database\Seeders;
use App\Models\User;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Database\Seeder;

class UsersSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        User::create([
            'name' => 'admin',
            'username'=>'981206086163',
            'email'=>'affeef98@gmail.com',
            'password' => Hash::make('P@$$w0rd01')
            
        ]);

        User::create([
            'name' => 'user test',
            'username'=>'12345678',
            'email'=>'a@a.com',
            'password' => Hash::make('12345678')
            
        ]);
    }
}
