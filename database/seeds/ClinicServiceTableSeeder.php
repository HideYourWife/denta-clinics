<?php

use Illuminate\Database\Seeder;

class ClinicServiceTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $clinics = DB::table('clinics')->count();
        $services = DB::table('services')->count();
        $services = range(1, $services);
        $data = [];

        for ($i = 1; $i <= $clinics; $i++) {
            $rand_services = [];
            for ($s = 1; $s < 70; $s++) {
                $rand_services[] = Arr::random($services);
            }
            $rand_services = array_unique($rand_services);
            foreach ($rand_services as $service) {
                $data[] = ['clinic_id' => $i, 'service_id' => $service, 'price' => rand(500, 50000)];
            }
        }

        DB::table('clinic_services')->insert($data);
    }
}
