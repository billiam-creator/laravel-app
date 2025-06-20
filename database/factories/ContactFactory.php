<?php

namespace Database\Factories;

use App\Models\Contact; // Make sure to import your Contact model
use Illuminate\Database\Eloquent\Factories\Factory;

class ContactFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Contact::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition(): array
    {
        return [
            'full_names' => $this->faker->name(), 
            'email' => $this->faker->unique()->safeEmail(), 
            'message' => $this->faker->paragraph(), 
        ];
    }
}