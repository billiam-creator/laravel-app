<?php

namespace Database\Seeders;

use App\Models\Event; // Corrected: Use backslash for namespace separator
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class EventSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Event::factory()->count(40)->create();
    }
}