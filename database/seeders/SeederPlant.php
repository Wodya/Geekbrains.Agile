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
        for($i = 0; $i < 10; $i++) {
            $data[] = [
                'id'  => $i,
                'name' => $faker->sentence(mt_rand(1,2)),
                'short_info' => $faker->realText(mt_rand(30,40)),
                'full_info' => $faker->realText(mt_rand(150,200)),
                'photo_small_path' => 'image1.jpg',
                'photo_big_path' => 'image1.png',
            ];
        }
        return $data;
    }
    private function getDataTag() :array
    {
        $tags = ["Светолюбивое", "Суккуленты", "Не любит сквозняка","Цветущее"];
        $selects = DB::table('plant')->select("id")->get();

        $data = [];
        foreach($selects as $select)
        {
            $tag1 = $tags[mt_rand(0,3)];
            $tag2 = $tags[mt_rand(0,3)];
            $data[] = [
                    "plant_id" => $select->id,
                    "tag" => $tag1
                ];
            if($tag1 !== $tag2)
            $data[] = [
                    "plant_id" => $select->id,
                    "tag" => $tag2
                ];
        }
        return $data;
    }
}
