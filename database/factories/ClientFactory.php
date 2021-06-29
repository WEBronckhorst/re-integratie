<?php

namespace Database\Factories;

use App\Models\Client;
use Auth;
use Illuminate\Database\Eloquent\Factories\Factory;
use DateTime;

class ClientFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Client::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        $leeftijd = rand(15,35);
        $uderid = rand(1,5);
        $text = rand(1,4);
        return [
            'user_id' => $uderid,
            'inschijfDatum' => $this->faker->dateTime(),
            $voorNaam = 'voorNaam' => $this->faker->firstName(),
            $voorLeters = 'voorLeters' =>  substr($voorNaam, -1).".",
             'tussenNaam' =>$tussenNaam = $this->faker->firstName(),
             'achterNaam' => $achterNaam = $this->faker->lastName(),
            'geslacht' => $this->faker->title(),

            'dob' => $this->faker->dateTime(),

            'adres' => $this->faker->streetAddress(),

            'poetcode' => $this->faker->postcode(),
            'plats' => $this->faker->city(),
            'telefoon' => $this->faker->phoneNumber(),

            'mail' => $this->faker->unique()->email(),


            $ouders_voorNaam = 'ouders_voorNaam' => $this->faker->firstName(),
            $ouders_voorLeters = 'ouders_voorLeters' =>  substr($ouders_voorNaam, -1).".",
            $ouders_tussenNaam = 'ouders_tussenNaam' => $tussenNaam,
            $ouders_achterNaam = 'ouders_achterNaam' => $achterNaam,
            'ouders_geslacht' => $this->faker->title(),


            'ouders_adres' => $this->faker->streetAddress(),

            'ouders_poetcode' => $this->faker->postcode(),
            'ouders_plats' => $this->faker->city(),
            'ouders_telefoon' => $this->faker->phoneNumber(),

            'ouders_mail' => $this->faker->unique()->email(),
            'bijzonderheden' => $this->faker->paragraphs($text, true),
        ];
    }
}

