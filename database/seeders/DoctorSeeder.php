<?php

namespace Database\Seeders;

use App\Models\doctor;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DoctorSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
       doctor::factory()->count(20)->create();
    }
}
