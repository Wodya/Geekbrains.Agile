<?php

namespace Database\Seeders;

use Faker\Factory;
use Illuminate\Database\Seeder;

class PlantsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        \DB::table('plants')->insert($this->getData());
    }
    protected function getData() : array {
        $faker = Factory::create('ru_RU');
        $data = [];
        for($i=0; $i<20; $i++){
            $imgNum = ($i % 10) + 1;
            $data[] = [
                'category_id' =>mt_rand(1,5),
                'name' => $faker->words(2, true),
                'short_info' => $faker->realText(mt_rand(10,25)),
                'full_info' => $faker->realText(mt_rand(150,200)),
                'watering_days' => mt_rand(1,10),
                'watering_info' => $faker->realText(mt_rand(10,25)),
                'manuring_days' => mt_rand(1,15),
                'manuring_info' => $faker->realText(mt_rand(10,25)),
                'pest_control_days' => mt_rand(1,30),
                'pest_control_info' => $faker->realText(mt_rand(10,25)),
                'photo_small_path' => "image{$imgNum}.jpg",
                'photo_big_path' => "image{$imgNum}.jpg",
                'created_at'=> $faker->dateTimeBetween('2021-01-01'),
                'updated_at'=> $faker->dateTimeBetween('2021-01-01'),
            ];
        }
        return $data;
    }
}
