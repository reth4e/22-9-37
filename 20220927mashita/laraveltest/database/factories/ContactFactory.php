<?php

namespace Database\Factories;
use App\Models\Contact;

use Illuminate\Database\Eloquent\Factories\Factory;

class ContactFactory extends Factory
{
    protected $model = Contact::class;
    /**
     * Define the model's default state.
     *
     * @return array
     * 
     */
    public function definition()
    {
        return [
            'familyname' => $this->faker->lastName,
            'name' => $this->faker->firstName,
            'fullname' => $this->faker->lastName.$this->faker->firstName,
            'gender' => $this->faker->numberBetween(1,2),
            'email' => $this->faker->email,
            'address' => $this->faker->address,
            'option' => $this->faker->realText(100),
            'postcode' => $this->faker->regexify('[1-9]{3}-[0-9]{4}'),
        ];
    }
}
