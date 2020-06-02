<?php

use Illuminate\Database\Seeder;

class BlogCategoriesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $data = [
            ['id' => 1, 'name' => 'Полезные статьи', 'slug' => 'poleznie-stati'],
            ['id' => 2, 'name' => 'Все о стоматологиях', 'slug' => 'vse-o-stomatologii'],
            ['id' => 3, 'name' => 'Советы по выбору клиники', 'slug' => 'soveti-po-viboru-kliniki'],
            ['id' => 4, 'name' => 'Общие советы', 'slug' => 'obsie-soveti'],
            ['id' => 5, 'name' => 'Уход за зубами', 'slug' => 'uhod-za-zubami'],
        ];

        DB::table('blog_categories')->insert($data);
    }
}
