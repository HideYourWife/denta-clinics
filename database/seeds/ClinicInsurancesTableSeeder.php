<?php

use Illuminate\Database\Seeder;

class ClinicInsurancesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $clinics = DB::table('clinics')->count();
        $insurances = DB::table('insurances')->count();
        $insurances = range(1, $insurances);
        $data = [];

        for ($i = 1; $i <= $clinics; $i++) {
            $rand_insurances = [];
            for ($s = 1; $s <= 5; $s++) {
                $rand_insurances[] = Arr::random($insurances);
            }
            $rand_insurances = array_unique($rand_insurances);
            foreach ($rand_insurances as $insurance) {
                $data[] = ['clinic_id' => $i, 'insurance_id' => $insurance];
            }
        }

        DB::table('clinic_insurances')->insert($data);
    }
}
