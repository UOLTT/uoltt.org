<?php

use App\Models\Allegiance;
use Illuminate\Database\Seeder;

class SystemsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $Systems = [
            ["Sol", 1],
            ["Croshaw", 1],
            ["Bremen", 1],
            ["Oso", 5],
            ["Kallis", 5],
            ["Pyro", 5],
            ["Nul", 5],
            ["Chronos", 1],
            ["Volt", 2],
            ["Veritas", 2],
            ["Virtus", 3],
            ["Vermillion", 2],
            ["Vector", 2],
            ["Kellog", 5],
            ["Branaugh", 5],
            ["Odin", 2],
            ["Tanga", 5],
            ["Virgil", 2],
            ["Tiber", 2],
            ["Orion", 2],
            ["Virgo", 2],
            ["Vulture", 2],
            ["Caliban", 2],
            ["Viking", 2],
            ["Vendetta", 2],
            ["Voodoo", 2],
            ["Vagabond", 2],
            ["Vesper", 2],
            ["Vanguard", 2],
            ["Leir", 5],
            ["Oberon", 5],
            ["Nyx", 5],
            ["Cathcart", 5],
            ["Hades", 5],
            ["Min", 5],
            ["Taranis", 5],
            ["Tyrol", 5],
            ["Indra", 3],
            ["Hadur", 3],
            ["Pallas", 3],
            ["Tal", 3],
            ["Ayrka", 3],
            ["Markahil", 3],
            ["Khabari", 3],
            ["Elsin", 3],
            ["Kayfa", 3],
            ["Rihlah", 3],
            ["Eealus", 3],
            ["Stanton", 1],
            ["Osiris", 5],
            ["Hadrian", 1],
            ["Garron", 5],
            ["Magnus", 1],
            ["Tayac", 1],
            ["Baker", 1],
            ["Kiel", 1],
            ["Oya", 1],
            ["Yulin", 4],
            ["Bacchus", 4],
            ["Horus", 1],
            ["Geddon", 4],
            ["Gliese", 4],
            ["Goss", 1],
            ["Kins", 4],
            ["Helios", 1],
            ["Charon", 1],
            ["Tamsa", 1],
            ["Terra", 1],
            ["Idris", 1],
            ["Ellis", 1],
            ["Banshee", 1],
            ["Fora", 1],
            ["Nexus", 1],
            ["Kabal", 1],
            ["Kilian", 1],
            ["Elysium", 1],
            ["Cano", 1],
            ["Nemo", 1],
            ["Ferron", 1],
            ["Centauri", 1],
            ["Rhetor", 1],
            ["Davien", 1],
            ["Gurzil", 1],
            ["Tasma", 1],
            ["Tohil", 1],
            ["Vega", 1],
            ["Oretani", 5],
            ["Corel", 1],
            ["Castra", 1],
            ["Genesis", 5]
        ];
        foreach ($Systems as $System) {
            Allegiance::findOrFail($System[1])
                ->systems()
                ->create([
                    'name' => $System[0]
                ]);
        }
    }
}
