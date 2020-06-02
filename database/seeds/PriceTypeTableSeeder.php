<?php

use Illuminate\Database\Seeder;

class PriceTypeTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $data = [
            ['id' => 1, 'name' => 'бомж пакет', 'sort' => 1],
            ['id' => 2, 'name' => 'сэконд хэнд', 'sort' => 2],
            ['id' => 3, 'name' => 'normal', 'sort' => 3],
            ['id' => 4, 'name' => 'VIP', 'sort' => 4],
            ['id' => 5, 'name' => 'president', 'sort' => 5],
        ];

        DB::table('price_types')->insert($data);
    }
}
