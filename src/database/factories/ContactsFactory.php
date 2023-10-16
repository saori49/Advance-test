<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use App\Models\Contact;

class ContactsFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'first-name' => $this->faker->first-name(),
            'last-name' => $this->faker->last-name(),
            'gender_id' => rand(1,2),
            'email' => $this->faker->email(),
            'postcode'=> $this->faker->postcode(),
            'address' => $this->faker->address(),
            'building_name' => $this->faker->building_name(),
            'opinion' => $this->faker->opinion(),
        ];
    }
}
