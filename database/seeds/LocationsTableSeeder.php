<?php

use App\Models\Location;
use Illuminate\Database\Seeder;

class LocationsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $Locations = [
            ['Sol', 1, 1, 1, 1, 1],
            ['Earth', 2, 1, 2, 1, 1],
            ['Luna', 3, 1, 3, 1, 1],
            ['Mercury', 4, 1, 2, 1, 1],
            ['Venus', 5, 1, 2, 1, 1],
            ['Mars', 6, 1, 2, 1, 1],
            ['Herschel Belt', 7, 1, 7, 1, 1],
            ['Jupiter', 8, 1, 2, 1, 1],
            ['Saturn', 9, 1, 2, 1, 1],
            ['Uranus', 10, 1, 2, 1, 1],
            ['Sol - Davien', 11, 1, 6, 1, 1],
            ['Neptune', 12, 1, 2, 1, 1],
            ['Pluto', 13, 1, 4, 1, 1],
            ['Sol - Croshaw', 14, 1, 6, 1, 1],
            ['Kuiper Belt', 15, 1, 7, 1, 1],
            ['TDD Kesner', 16, 1, 5, 1, 1],
            ['Phobos', 17, 1, 3, 1, 1],
            ['Deimos', 18, 1, 3, 1, 1],
            ['IMS Bolliver', 19, 1, 5, 1, 2],
            ['Ganymede', 20, 1, 3, 1, 1],
            ['Europa', 21, 1, 3, 1, 1],
            ['Io', 22, 1, 3, 1, 1],
            ['Callisto', 23, 1, 3, 1, 1],
            ['Tethys', 24, 1, 3, 1, 1],
            ['Rhea', 25, 1, 3, 1, 1],
            ['Iapetus', 26, 1, 3, 1, 1],
            ['Titan', 27, 1, 3, 1, 1],
            ['Dione', 28, 1, 3, 1, 1],
            ['INS Dunleavy', 29, 1, 5, 1, 3],
            ['Miranda', 30, 1, 3, 1, 1],
            ['Ariel', 31, 1, 3, 1, 1],
            ['Oberon', 32, 1, 3, 1, 1],
            ['Titania', 33, 1, 3, 1, 1],
            ['Umbriel', 34, 1, 3, 1, 1],
            ['Charon', 35, 1, 3, 1, 1],
            ['Pyro', 36, 6, 1, 5, 4],
            ['Pyro - Cano', 37, 6, 6, 5, 4],
            ['Pyro 1', 38, 6, 2, 5, 4],
            ['Akrio Cluster', 39, 6, 7, 5, 4],
            ['Pyro 2', 40, 6, 2, 5, 4],
            ['Pyro 3', 41, 6, 2, 5, 4],
            ['Pyro - Tera', 42, 6, 6, 5, 4],
            ['Pyro 4', 43, 6, 2, 5, 4],
            ['Pyro - Nyx', 44, 6, 6, 5, 4],
            ['Pyro 5', 45, 6, 2, 5, 4],
            ['Pyro - Stanton', 46, 6, 6, 5, 4],
            ['Pyro - Castra', 47, 6, 6, 5, 4],
            ['Pyro - Oso', 48, 6, 6, 5, 4],
            ['Pyro - Hadrian', 49, 6, 6, 5, 4],
            ['Pyro 6', 50, 6, 6, 5, 4],
            ['Tayac', 51, 54, 1, 1, 1],
            ['Tayac 1', 52, 54, 2, 1, 1],
            ['The Ark', 53, 54, 5, 1, 1],
            ['Tayac - Baker', 54, 54, 6, 1, 1],
            ['Tayac - Terra', 55, 54, 6, 1, 1],
            ['Tayac 2', 56, 54, 2, 1, 1],
            ['Tayac - Goss', 57, 54, 6, 1, 1],
            ['Shepherd', 58, 54, 4, 1, 1],
            ['Terra Nova', 59, 68, 1, 1, 1],
            ['Aero', 60, 68, 2, 1, 1],
            ['Pike', 61, 68, 2, 1, 1],
            ['Terra', 62, 68, 2, 1, 1],
            ['Gen', 63, 68, 2, 1, 1],
            ['Terra - Taranis', 64, 68, 6, 1, 1],
            ['Terra - Goss', 65, 68, 6, 1, 1],
            ['Terra - Stanton', 66, 68, 6, 1, 1],
            ['Terra - Pyro', 67, 68, 6, 1, 1],
            ['Terra - Magnus', 68, 68, 6, 1, 1],
            ['Terra - Hadrian', 69, 68, 6, 1, 1],
            ['Marisol Belt', 70, 68, 7, 1, 1],
            ['Henge Cluster', 71, 68, 7, 1, 1],
            ['IAS Hammett', 72, 68, 5, 1, 1],
            ['ICS Evolen', 73, 68, 5, 1, 1],
            ['INS Reilly', 74, 68, 5, 1, 1],
            ['Terra - Tayac', 75, 68, 6, 1, 1],
            ['Stanton', 77, 49, 1, 1, 1],
            ['Hurston', 78, 49, 2, 1, 6],
            ['Arccorp', 79, 49, 2, 1, 7],
            ['Crusader', 80, 49, 2, 1, 8],
            ['Covalex Hub Gundo', 81, 49, 5, 1, 10],
            ['Cry-Astro Service', 82, 49, 5, 1, 11],
            ['Commarray SCC', 83, 49, 5, 1, 12],
            ['ICC Scanhub Stanton', 84, 49, 5, 1, 1],
            ['Port Olisar', 85, 49, 5, 1, 8],
            ['Security Post Kareah', 86, 49, 5, 1, 9],
            ['Yela', 87, 49, 3, 1, 1],
            ['Daymar', 88, 49, 3, 1, 1],
            ['Cellin', 89, 49, 3, 1, 1],
            ['Ruin Station', 90, 6, 5, 5, 5],
        ];

        foreach ($Locations as $LocationDatum) {
            Location::create([
                'name'              => $LocationDatum[0],
                'system_id'         => $LocationDatum[2],
                'celestial_type_id' => $LocationDatum[3],
                'allegiance_id'     => $LocationDatum[4],
                'affiliation_id'    => $LocationDatum[5],
            ]);
        }
    }
}
