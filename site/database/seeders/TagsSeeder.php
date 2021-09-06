<?php

namespace Database\Seeders;

use App\Models\Tag;
use Illuminate\Database\Seeder;

class TagsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Tag::create([
           'name' => 'Saucisson',
           'categories' => 'Nourriture'
        ]);

        Tag::create([
            'name' => 'Fromage',
            'categories' => 'Nourriture'
        ]);

        Tag::create([
            'name' => 'Boudin',
            'categories' => 'Nourriture'
        ]);

        Tag::create([
            'name' => 'Viande',
            'categories' => 'Nourriture'
        ]);

        Tag::create([
            'name' => 'Poulet',
            'categories' => 'Nourriture'
        ]);

        Tag::create([
            'name' => 'Belgique',
            'categories' => 'Pays'
        ]);

        Tag::create([
            'name' => 'France',
            'categories' => 'Pays'
        ]);

        Tag::create([
            'name' => 'Espagne',
            'categories' => 'Pays'
        ]);
    }
}
