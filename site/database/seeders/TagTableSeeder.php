<?php

namespace Database\Seeders;

use App\Models\Table;
use App\Models\Tag;
use App\Models\TagTable;
use Illuminate\Database\Seeder;

class TagTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $tables = Table::all();

        foreach ($tables as $table) {
            $randLine = rand(1, 3);
            $tags = Tag::all();
            for ($i = $randLine; $i > 0; $i--) {
                $randTag = rand(0, $tags->count() - 1);
                TagTable::create([
                   'table_id' => $table->id,
                   'tag_id' => $tags[$randTag]->id,
                ]);
            }
        }
    }
}
