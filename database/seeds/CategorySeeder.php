<?php

use Illuminate\Database\Seeder;
use App\Category;

class CategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Category::create([
            'name' => 'Programmer',
            'slug' => str_slug('pemograman')//memperpendek judul tautan dalam tautan
        ]);

        Category::create([
            'name' => 'Desaigner',
            'slug' => str_slug('desaigner')
        ]);

        Category::create([
            'name' => 'Arsitektur',
            'slug' => str_slug('arsitek')
        ]);

        Category::create([
            'name' => 'Animasi',
            'slug' => str_slug('animasi')
        ]);
    }
}
