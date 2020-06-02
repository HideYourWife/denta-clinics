<?php

use Illuminate\Database\Seeder;

class InsuranceTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $data = [
            ['id' => 1, 'name' => 'DHL'],
            ['id' => 2, 'name' => 'SNP'],
            ['id' => 3, 'name' => 'ISP страхование'],
            ['id' => 4, 'name' => 'ABC'],
            ['id' => 5, 'name' => 'PUB corporation'],
        ];

        DB::table('insurances')->insert($data);
    }
}
