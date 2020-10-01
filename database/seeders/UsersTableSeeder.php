<?php
use Illuminate\Support\Str;

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        \App\User::create([
        'name'  => Str::random(20),
        'email' => Str::random(10) . '@codepolitan.com',
        'password'  => bcrypt('secret'),
        'role_id'  =>2
		]);
    }


}
