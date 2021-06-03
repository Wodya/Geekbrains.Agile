<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class TagsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        \DB::table('tags')->insert($this->getData());
    }

    protected function getData(): array
    {
        $data = [
            [
                'name' => 'напольные',
                'english_name' => 'floorPlased',
                'group' => 'place'
            ],
            [
                'name' => 'настольные',
                'english_name' => 'wallPlased',
                'group' => 'place'
            ],
            [
                'name' => 'подвесные',
                'english_name' => 'hangPlased',
                'group' => 'place'
            ],
            [
                'name' => 'теневыносливые',
                'english_name' => 'shade-tolerant',
                'group' => 'light'
            ],
            [
                'name' => 'светолюбивые',
                'english_name' => 'photophilous',
                'group' => 'light'
            ],
            [
                'name' => 'не цветущие',
                'english_name' => 'noBlossoming',
                'group' => 'blossom'
            ],
            [
                'name' => 'цветущие',
                'english_name' => 'blossoming',
                'group' => 'blossom'
            ],
            [
                'name' => 'выделяют кислород',
                'english_name' => 'oxigenGenerator',
                'group' => 'other'
            ],
            [
                'name' => 'очищают воздух',
                'english_name' => 'airCleaner',
                'group' => 'other'
            ],

        ];
        return $data;
    }

}
