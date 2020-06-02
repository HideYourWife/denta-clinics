<?php

use Illuminate\Database\Seeder;

class ContactsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $data = [
            [
                'id' => 1,
                'email' => 'denta-clinics@spb.ru',
                'vk' => 'denta-clinics.vk.com',
                'facebook' => 'denta-clinics.facebook.com',
                'instagram' => 'denta-clinics.instagram.com',
                'phone_1' => '800-500-555-35',
                'phone_2' => '800-500-555-45',
                'phone_3' => '800-500-555-55',
                'ico' => 'ico.jpg',
                'address' => 'ул. Пушкина дом Колотушкина',
                'work_time' => '8:00-19:00',
                'map_coordinates' => '41.1518168,21.1516848',
                'reviews' => '1100',
                'clinics' => '564',
                'visitors' => '2724'
            ]
        ];

        DB::table('contacts')->insert($data);
    }
}
