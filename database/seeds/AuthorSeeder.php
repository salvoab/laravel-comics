<?php

use App\Author;
use Illuminate\Database\Seeder;
use Faker\Generator as Faker;

class AuthorSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run(Faker $faker)
    {
        for ($i=0; $i < 10; $i++) { 
            $artist = new Author();
            $artist->name = $faker->firstName();
            $artist->lastname = $faker->lastName;
        }
    }
}
