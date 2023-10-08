<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Seeder;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $user = User::query()->whereEmail('admin@admin.com')->first();

        if (!$user){
            User::query()->create([
                'name' => 'dogukan',
                'email' => 'admin@admin.com',
                'password' => bcrypt('123456789'),
            ]);
        }
    }
}
