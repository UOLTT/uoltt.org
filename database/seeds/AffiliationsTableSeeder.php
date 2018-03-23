<?php

use App\Models\Affiliation;
use Illuminate\Database\Seeder;

class AffiliationsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $Affiliations = [
            'UEE Government',
            'UEE Marines',
            'UEE Navy',
            'Unaffiliated',
            'Outlaws',
            'Hurston Dynamics',
            'Arc Corp',
            'Crusader Industries',
            'Crusader Security',
            'Covalex Shipping',
            'Cry-Astro',
            'Imperial Cartography Center',
        ];
        foreach ($Affiliations as $affiliation) {
            Affiliation::create([
                'name' => $affiliation,
            ]);
        }
    }
}
