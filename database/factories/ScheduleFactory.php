<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\schedule>
 */
class ScheduleFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [

        'd_id'=>$this->faker->integer(),
        'pat_id'=>$this->faker->integer(),
        'total_price'=>$this->faker->randomFloat(),

        ];
    }
}
