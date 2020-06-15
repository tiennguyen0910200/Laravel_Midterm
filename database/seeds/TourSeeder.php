<?php

use Illuminate\Database\Seeder;
use Faker\Generator as Faker;

class TourSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run(Faker $faker)
    {
       for ($i=0; $i < 10; $i++) { 

    	DB::table('tours')->insert([
    		'name' => $faker->name,
    		'img' => Str::random(20),
    		'typetour' => Str::random(20),
    		'schelude' => Str::random(20),
    		'depart'=>$faker->numberBetween(1900,2020),
    		'numberPeople' => 10,
    		'price' =>1000
    	]);
    }
    }
}
