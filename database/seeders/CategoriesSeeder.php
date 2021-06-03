<?php

namespace Database\Seeders;

use Faker\Factory;
use Illuminate\Database\Seeder;

class CategoriesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        \DB::table('categories')->insert($this->getData());
    }
    protected function getData():array {
        $faker = Factory::create('ru_RU');
        $data = [];
        for ($i=0; $i < 5; $i++) {
            $data[] = [
                'name' => $faker->words(2, true),
                'description' => $faker->sentence,
            ];
        }
        return $data;
    }
}
