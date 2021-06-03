<?php

namespace Database\Seeders;

use Faker\Factory;
use Illuminate\Database\Seeder;

class PlantsActionsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        \DB::table('plants_actions')->insert($this->getData());
    }
    protected function getData() : array {
        $faker = Factory::create('ru_RU');
        $data = [];
        for($i=0; $i<150; $i++){
            $data[] = [
                'action_id' =>mt_rand(1,4),
                'user_plant_id' => mt_rand(1,40),
                'date'=>$faker->dateTimeBetween('now', '+30 days'),
            ];
        }
        return $data;
    }
}
