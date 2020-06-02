<?php

use database\factories\NewsFactory;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        $this->call([
            MetroTableSeeder::class,
            InsuranceTableSeeder::class,
            PriceTypeTableSeeder::class,
            RegionTableSeeder::class,
            ServiceCategoriesTableSeeder::class,
            BlogCategoriesTableSeeder::class,
            ContactsTableSeeder::class,
            TagsTableSeeder::class,
            ]);

        factory(\App\Models\News::class, 100)->create();
        factory(\App\Models\Blog::class, 100)->create();
        factory(\App\Models\Service::class, 100)->create();
        factory(\App\Models\Clinic::class, 300)->create();

        $this->call(ClinicServiceTableSeeder::class);

        factory(\App\Models\Stock::class, 100)->create();
        factory(\App\Models\Review::class, 1500)->create();
        factory(\App\Models\ClinicPhoto::class, 1500)->create();

        $this->call(ClinicInsurancesTableSeeder::class);
        $this->call(ClinicTagsTableSeeder::class);
    }
}
