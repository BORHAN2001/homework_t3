<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Patient>
 */
class PatientFactory extends Factory
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
            'birthday' => $this->faker->date(),
            'email'=>$this->faker->email(),
            'phone'=>$this->faker->phoneNumber(),
            'gender'=>$this->faker->string(4),
        ];
    }
}
