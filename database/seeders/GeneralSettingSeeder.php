<?php

namespace Database\Seeders;

use App\Models\GeneralSetting;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class GeneralSettingSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        GeneralSetting::query()->create([
            'site_name'    => 'SolidRockeyecare',
            'favicon'      => 'uploads/favicon.ico',
            'email'        => 'info@solidrockeyecare.com',
            'address'      => '24/11 Robert Road , Lagos , Nigeria',
        ]);
    }
}
