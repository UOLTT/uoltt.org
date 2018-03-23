<?php

use App\Models\Allegiance;
use Illuminate\Database\Seeder;

class AllegiancesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $Allegiances = [
            'UEE',
            'Vanduul',
            'Xian',
            'Banu',
            'Unaffiliated',
            'Pirate',
        ];
        foreach ($Allegiances as $allegiance) {
            Allegiance::create([
                'name' => $allegiance,
            ]);
        }
    }
}
