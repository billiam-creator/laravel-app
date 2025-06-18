<?php

namespace Database\Seeders;

use App\Models\Contact; // Make sure to import your Contact model
use Illuminate\Database\Seeder;

class ContactSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        // Use the ContactFactory to create 20 (or any number you prefer) fake contact records.
        Contact::factory()->count(20)->create();
    }
}