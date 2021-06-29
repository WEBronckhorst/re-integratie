<?php

namespace Database\Factories;

use App\Models\Locatie;
use Illuminate\Database\Eloquent\Factories\Factory;

class LocatieFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Locatie::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        $uderid = rand(1,5);
        $clientid = rand(1,16);
        return [
            'user_id' => $uderid,
            'client_id' => $clientid,
            'titel' => $this->faker->company(),
            'adres' => $this->faker->streetAddress(),
            'poetcode' => $this->faker->postcode(),
            'plats' => $this->faker->city(),
            'telefoon' => $this->faker->phoneNumber(),
            'mail' => $this->faker->unique()->email(),
        ];
    }
}
