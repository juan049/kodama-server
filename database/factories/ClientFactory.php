<?php

namespace Database\Factories;

use App\Models\Adress;
use App\Models\Contact;
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
        $adress = Adress::factory(1)->create()->first();
        $contact = Contact::factory(1)->create()->first();

        return [
            'uuid' => Str::uuid(),
            'name' => fake()->company(),
            'adress_id' => $adress->id,
            'contact_id' => $contact->id,
            'description' => 'descripción',
        ];
    }
}
