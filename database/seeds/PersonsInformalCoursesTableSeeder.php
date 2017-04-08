<?php

use App\Models\Person;
use App\Models\PersonsInformalCourse;
use Illuminate\Database\Seeder;

class PersonsInformalCoursesTableSeeder extends Seeder
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
            PersonsInformalCourse::create(array(
                'person_id' => (Person::inRandomOrder()->first())->id ,
                'type' => $faker->name ,
                'name' => $faker->name ,
                'hours_count' => $faker->numberBetween($min=20, $max=90) ,
                'place_name' => $faker->name ,
                'notes' => $faker->text ,

                'from_date' => $faker->date($format = 'Y-m-d', $max = 'now') ,
                'to_date' => $faker->date($format = 'Y-m-d', $max = 'now') ,

            ));
        }
    }
}
