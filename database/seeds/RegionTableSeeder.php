<?php

use Illuminate\Database\Seeder;

class RegionTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $data = [
            ['id' => 1, 'name' => 'Адмиралтейский район'],
            ['id' => 2, 'name' => 'Василеостровский'],
            ['id' => 3, 'name' => 'Выборгский'],
            ['id' => 4, 'name' => 'Калининский'],
            ['id' => 5, 'name' => 'Кировский'],
            ['id' => 6, 'name' => 'Колпинский'],
            ['id' => 7, 'name' => 'Красногвардейский'],
            ['id' => 8, 'name' => 'Красносельский'],
            ['id' => 9, 'name' => 'Кронштадтский'],
            ['id' => 10, 'name' => 'Курортный'],
            ['id' => 11, 'name' => 'Московский'],
            ['id' => 12, 'name' => 'Невский'],
            ['id' => 13, 'name' => 'Петроградский'],
            ['id' => 14, 'name' => 'Петродворцовый'],
            ['id' => 15, 'name' => 'Приморский'],
            ['id' => 16, 'name' => 'Пушкинский'],
            ['id' => 17, 'name' => 'Фрунзенский'],
            ['id' => 18, 'name' => 'Центральный'],
        ];

        DB::table('regions')->insert($data);
    }
}
