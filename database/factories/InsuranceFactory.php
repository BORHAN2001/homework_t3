<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Insurance>
 */
class InsuranceFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'name'=>$this->faker->firstName() ." " . $this->faker->lastName(),
            'end_date' => $this->faker->date(),
            'serves'=>$this->faker->sentence(4),
            'pat_id'=>$this->faker->integer(),

            
        ];
    }
}
