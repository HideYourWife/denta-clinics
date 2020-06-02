<?php

use Illuminate\Database\Seeder;

class ServiceCategoriesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $data = [
            ['id' => 1, 'name' => 'Консультации'],
            ['id' => 2, 'name' => 'Несъемные зубные протезы'],
            ['id' => 3, 'name' => 'Пародонтология'],
            ['id' => 4, 'name' => 'Хирургическая стоматология'],
            ['id' => 5, 'name' => 'Эндодонтическое лечение'],
            ['id' => 6, 'name' => 'Детская стоматология'],
            ['id' => 7, 'name' => 'Съемный зубной протез'],
            ['id' => 8, 'name' => 'Ортодонтия'],
            ['id' => 9, 'name' => 'Отбеливание зубов'],
            ['id' => 10, 'name' => 'Одонтология'],
            ['id' => 11, 'name' => 'Зубные импланты'],
            ['id' => 12, 'name' => 'Стоматологический турим'],
        ];

        DB::table('service_categories')->insert($data);
    }
}
