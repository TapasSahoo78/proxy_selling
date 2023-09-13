<?php

namespace Database\Seeders;

use App\Models\PayType;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class PayTypeSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $payType = new PayType();
        $payType->name_type = 'Manually';
        $payType->save();

        $payType = new PayType();
        $payType->name_type = 'Online';
        $payType->save();
    }
}
