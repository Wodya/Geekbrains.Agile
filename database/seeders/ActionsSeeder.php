<?php

namespace Database\Seeders;

use Faker\Factory;
use Illuminate\Database\Seeder;

class ActionsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        \DB::table('actions')->insert($this->getData());
    }

    protected function getData(): array
    {
        $data = [
            [
                'name' => 'полив',
            ],
            [
                'name' => 'удобрение',
            ],
            [
                'name' => 'обрезка',
            ],
            [
                'name' => 'обработка от вредителей',
            ],
        ];

        return $data;
    }
}
