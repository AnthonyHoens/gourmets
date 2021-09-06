<?php

namespace Database\Seeders;

use App\Models\Exhibitor;
use App\Models\Table;
use Illuminate\Database\Seeder;

class TablesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $exhibitors = Exhibitor::all();

        $tableName = [
            'Le fromagier',
            'Le cui-cui',
            'La saucisse volante',
            'La vache hurlente',
            'La brebis belante',
            'Le petit poucet',
        ];


        foreach ($exhibitors as $exhibitor) {
            $randLocation = rand(1, $exhibitors->count());

            $verifyRandNumber = Table::all()->filter(function ($table) use ($randLocation) {
                return $table->location == $randLocation;
            })->count();

            while($verifyRandNumber) {

                $randLocation = rand(1, $exhibitors->count());

                $verifyRandNumber = Table::all()->filter(function ($table) use ($randLocation) {
                    return $table->location == $randLocation;
                })->count();
            }



            $random = rand(1, count($tableName)) - 1;
            $name = $tableName[$random];

            Table::create([
               'exhibitor_id' => $exhibitor->id,
               'name' => $name,
               'location' => $randLocation,
            ]);
        }
    }
}
