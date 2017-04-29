<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $this->call(AllegiancesTableSeeder::class);
        $this->call(AffiliationsTableSeeder::class);
        $this->call(SystemsTableSeeder::class);
        $this->call(CelestialTypesTableSeeder::class);
    }
}
