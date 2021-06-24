<?php

use Faker\Generator as Faker;
use App\Vacanza;
use Illuminate\Database\Seeder;


class VacanzeTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run(Faker $faker)
    {

        for ($i=0; $i < 100; $i++) {

            /* $faker = \Faker\Factory::create(); */

            $new_vacanza = new Vacanza();
            $new_vacanza->type = $this->typeRand();
            $new_vacanza->name = 'Nome Generico';
            $new_vacanza->address = $faker->streetAddress();
            $new_vacanza->postal_code = $faker->postcode();
            $new_vacanza->city = $faker->city();
            $new_vacanza->region = 'Lombardia';
            $new_vacanza->state = $faker->state();
            $new_vacanza->rating = $faker->numberBetween(0,5);
            $new_vacanza->square_meters = $faker->numberBetween(50,1000);
            $new_vacanza->rooms = $faker->numberBetween(0,6);
            $new_vacanza->beds = $faker->numberBetween(0,20);
            $new_vacanza->breakfast = $faker->numberBetween(0,1);
            $new_vacanza->swimming_pool = $faker->numberBetween(0,1);
            /* $new_vacanza->description = 'lorem'; */
            $new_vacanza->price = $faker->randomFloat(2,1,10000);
            $new_vacanza->kid_price = $faker->randomFloat(2,1,10000);
            $new_vacanza->save();

        }

    }

    private function typeRand(){
        $arr = ['casa','ostello','albergo','agriturismo','appartamento'];
        shuffle($arr);
        return $arr[0];
    }
}
