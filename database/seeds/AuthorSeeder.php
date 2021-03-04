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
            $author = new Author();
            $author->name = $faker->firstName();
            $author->lastname = $faker->lastName;
            $author->save();
        }
    }
}
