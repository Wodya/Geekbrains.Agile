<?php

namespace Database\Seeders;

use Faker\Factory;
use Illuminate\Database\Seeder;

class UsersPlantsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        \DB::table('users_plants')->insert($this->getData());
    }
    protected function getData() : array {
        $faker = Factory::create('ru_RU');
        $data = [];
        for($i=0; $i<40; $i++){
            $data[] = [
                'user_id' =>mt_rand(1,5),
                'plant_id' => mt_rand(1,20),
                'nickname' => $faker->name(),
                'note' => $faker->realText(mt_rand(20,50)),
                'created_at'=> $faker->dateTimeBetween('2021-01-01'),
                'updated_at'=> $faker->dateTimeBetween('2021-01-01'),
            ];
        }
        return $data;
    }
}
