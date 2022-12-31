<?php

namespace Database\Factories;

use App\Models\State;
use Illuminate\Support\Facades\DB;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Adress>
 */
class AdressFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {

        $state = State::all()[rand(0, count(State::all())-1)];
        $municipality = $state->municipalities[rand(0, (count($state->municipalities)-1))];
        
        return [
            'state_id' => $state->id,
            'municipality_id' => $municipality->id,
            'street' => fake()->streetName(),
            'external_number' => rand(1, 100), 
            'internal_number' => rand(1, 100),
            'suburb' => fake()->city(),
            'zip_code' => fake()->postcode(),
            'lat' => fake()->latitude(17, 28),
            'lng' => fake()->longitude(-108, -98),
        ];
    }
}
