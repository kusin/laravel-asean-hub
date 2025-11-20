<?php

namespace Database\Seeders;

use App\Models\UrbanDesign;
use Illuminate\Database\Seeder;

class UrbanDesignSeeder extends Seeder
{
    public function run(): void
    {
        UrbanDesign::factory()->count(75)->create();
    }
}
