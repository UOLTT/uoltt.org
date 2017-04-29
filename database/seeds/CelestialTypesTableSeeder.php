<?php

use App\Models\CelestialType;
use Illuminate\Database\Seeder;

class CelestialTypesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {

        $types =[
            "Star",
            "Planet",
            "Moon",
            "Dwarf Planet",
            "Station",
            "Jump Point",
            "Asteriod Belt"
        ];

        foreach ($types as $type) {
            CelestialType::create([
                'name' => $type
            ]);
        }

    }
}
