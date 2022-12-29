<?php

namespace Database\Factories;

use Illuminate\Support\Str;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Client>
 */
class ClientFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        return [
            'uuid' => Str::uuid(),
            'name' => fake()->company(),
            'street' => fake()->streetName(),
            'suburb' => fake()->city(),
            'zip_code' => fake()->postcode(),
            //'municipality_id' //TODO Cambiar municipio
            'lat' => fake()->latitude(),
            'lng' => fake()->longitude(),
            'email' => fake()->email(),
            'phone' => fake()->phoneNumber(),
            'website' => 'www.cliente.com',
            'description' => 'descripción',

        ];
    }
}
