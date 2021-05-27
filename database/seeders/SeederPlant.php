<?php

namespace Database\Seeders;

use Faker\Factory;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class SeederPlant extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('plant_tag')->delete();
        DB::table('plant')->delete();
        DB::table('plant')->insert($this->getData());
        DB::table('plant_tag')->insert($this->getDataTag());
    }
    private function getData() :array
    {
        $faker = Factory::create('ru_RU');

        $data = [];
        for($i = 0; $i < 20; $i++) {
            $data[] = [
                'id'  => $i+1,
                'name' => $faker->sentence(mt_rand(1,2)),
                'add_date' => $faker->dateTimeBetween('2021-01-01'),
                'short_info' => $faker->realText(mt_rand(30,40)),
                'full_info' => $faker->realText(mt_rand(150,200)),
                'photo_small_path' => 'image1.jpg',
                'photo_big_path' => 'image1.png',
                'watering_days' => mt_rand(1,10)
            ];
        }
        return $data;
    }
    private function getDataTag() :array
    {
        $tags1 = ["напольные", "настольные", "подвесные"];
        $tags2 = ["теневыносливые", "светолюбивые"];
        $tags3 = ["не цветущие", "цветущие"];
        $tags4 = ["выделяют кислород", "очищают воздух"];
        $selects = DB::table('plant')->select("id")->get();

        $data = [];
        foreach($selects as $select)
        {
            $tag1 = $tags1[mt_rand(0,count($tags1)-1)];
            $tag2 = $tags2[mt_rand(0,count($tags2)-1)];
            $tag3 = $tags3[mt_rand(0,count($tags3)-1)];
            $tag4 = $tags4[mt_rand(0,count($tags4)-1)];
            $data[] = [
                    "plant_id" => $select->id,
                    "tag" => $tag1
                ];
            $data[] = [
                    "plant_id" => $select->id,
                    "tag" => $tag2
                ];
            $data[] = [
                    "plant_id" => $select->id,
                    "tag" => $tag3
                ];
            $data[] = [
                    "plant_id" => $select->id,
                    "tag" => $tag4
                ];
        }
        return $data;
    }
}
