<?php

namespace Database\Seeders;

use App\Models\Admin;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Faker\Factory as Faker;

class AdminSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $faker = Faker::create();
        $user = new Admin();
        $user->uuid = $faker->uuid;
        $user->name = 'Superadmin';
        $user->email = 'superadmin@gmail.com';
        $user->email_verified_at = $faker->dateTime();
        $user->password = bcrypt('12345678');
        $user->is_super = true;
        $user->is_active = true;
        $user->save();
    }
}
