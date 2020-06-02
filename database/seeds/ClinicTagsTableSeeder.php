<?php

use Illuminate\Database\Seeder;

class ClinicTagsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $clinics = DB::table('clinics')->count();
        $tags = DB::table('tags')->count();
        $tags = range(1, $tags);
        $data = [];

        for ($i = 1; $i <= $clinics; $i++) {
            $rand_tags = [];
            for ($s = 1; $s <= 5; $s++) {
                $rand_tags[] = Arr::random($tags);
            }
            $rand_tags = array_unique($rand_tags);
            foreach ($rand_tags as $tag) {
                $data[] = ['clinic_id' => $i, 'tag_id' => $tag];
            }
        }

        DB::table('clinic_tags')->insert($data);
    }
}
