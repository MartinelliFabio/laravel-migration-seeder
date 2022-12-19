<?php

namespace Database\Seeders;


use Faker\Generator as Faker;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Trains;

class TravelTrainsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run(Faker $faker) {
        for($i = 0; $i < 10; $i++) {
            $newtrains = new Trains();
            $newtrains->azienda = $faker->words(2);
            $newtrains->stazione_partenza = $faker->words(4);
            $newtrains->stazione_arrivo = $faker->words(4);
            $newtrains->orario_partenza = $faker->time();
            $newtrains->orario_arrivo = $faker->time();
            $newtrains->codice_treno = $faker->bothify();
            $newtrains->numero_carrozze = $faker->randomDigit();
            $newtrains->in_orario = $faker->boolean();
            $newtrains->cancellato = $faker->boolean();
        }
    }
}
