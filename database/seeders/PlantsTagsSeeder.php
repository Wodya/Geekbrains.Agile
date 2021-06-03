<?php

namespace Database\Seeders;

use Faker\Factory;
use Illuminate\Database\Seeder;

class PlantsTagsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        \DB::table('plants_tags')->insert($this->getData());
    }
    protected function getData() : array {
        $data = [];
        for($i=0; $i<40; $i++){
            $data[] = [
                'tag_id' =>mt_rand(1,9),
                'plant_id' => mt_rand(1,20)
            ];
        }
        return $data;
    }
}
