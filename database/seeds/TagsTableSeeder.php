<?php

use Illuminate\Database\Seeder;

class TagsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $data = [
            ['id' => 1, 'name' => 'зуб'],
            ['id' => 2, 'name' => 'вставная челюсть'],
            ['id' => 3, 'name' => 'протез'],
            ['id' => 4, 'name' => 'пломба'],
            ['id' => 5, 'name' => 'детский врач'],
        ];

        DB::table('tags')->insert($data);
    }
}
