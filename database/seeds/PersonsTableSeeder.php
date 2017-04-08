<?php

use App\Models\Person;
use Illuminate\Database\Seeder;

class PersonsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $faker = Faker\Factory::create();

        foreach (range(1,10) as $index) {
            Person::create([
                'first_name' => $faker->firstName($gender = null|'male'|'female') ,
                'second_name' => $faker->firstNameMale ,
                'third_name' => $faker->firstNameMale ,
                'last_name' => $faker->lastName ,

                'full_name' => $faker->name ,

                'birth_date' => $faker->date($format = 'Y-m-d', $max = 'now') ,
                'national_id' => $faker->unique()->randomNumber($nbDigits = 9, $strict = false) ,

                'gender_cd' => $faker->randomElement(['male', 'female']) ,
                'social_status_cd' => $faker->randomElement(['single', 'married', 'widowed', 'divorced']) ,
                'current_degree' => $faker->randomElement(['a', 'b', 'c']) ,

            ]);
        }
    }
}