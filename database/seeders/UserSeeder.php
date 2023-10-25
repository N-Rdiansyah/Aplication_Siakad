<?php

namespace Database\Seeders;

use App\Models\User;
use GuzzleHttp\Promise\Create;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        User::factory(10)->create();

        
        User::create ([
            'name' => 'RDIAN Admin',
            'email' =>'rdian@gmail.com',
            'email_verified_at'=> now (),
            'password'=> Hash::make('123456'),
        ]);

    }
}
