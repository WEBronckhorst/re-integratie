<?php

namespace Database\Factories;

use App\Models\Uren;
use Illuminate\Database\Eloquent\Factories\Factory;
use Database\Factories\DateInterval;
class UrenFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Uren::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        $uderid = 1;
        $clientid = 379;
        $locatieid = 33;
        $id = 0;
        $text = rand(1,4);
        $starttijd = $this->faker->dateTimeThisYear($max = 'now', $timezone = null);


        $eindijd =  $starttijd->modify("+10 minutes");
        return [
            'user_id' => $uderid,
            'client_id' => $clientid,
            'locatie' => $locatieid,
           'start' => $starttijd,
            'eind' => $eindijd,
            'reisH_id' => $id,
            'reisT_id' => $id,
            'urentype_id' => $id,
            'bijzonderheden' => $this->faker->paragraphs($text, true),

        ];
    }
}
