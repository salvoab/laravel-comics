<?php

use App\Artist;
use Illuminate\Database\Seeder;
use Faker\Generator as Faker;

class ArtistSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run(Faker $faker)
    {
        for ($i=0; $i < 10; $i++) { 
            $artist = new Artist();
            $artist->name = $faker->firstName();
            $artist->lastname = $faker->lastName;
            $artist->save();
        }
    }
}
