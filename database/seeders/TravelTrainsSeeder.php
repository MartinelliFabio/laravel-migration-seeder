<?php

namespace Database\Seeders;


use Faker\Generator as Faker;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Train;

class TravelTrainsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run(Faker $faker) {
        for($i = 0; $i < 10; $i++) {
            $newtrains = new Train();
            $newtrains->azienda = $faker->company();
            $newtrains->stazione_partenza = $faker->city();
            $newtrains->stazione_arrivo = $faker->city();
            $newtrains->orario_partenza = $faker->time();
            $newtrains->orario_arrivo = $faker->time();
            $newtrains->data_partenza = $faker->date();
            $newtrains->codice_treno = $faker->bothify();
            $newtrains->numero_carrozze = $faker->randomDigit();
            $newtrains->in_orario = $faker->boolean();
            $newtrains->cancellato = $faker->boolean();
            $newtrains->save();
        }
    }
}
