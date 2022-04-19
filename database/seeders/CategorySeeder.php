<?php

namespace Database\Seeders;

use App\Models\Category;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class CategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('categories')->insert([
            'name' => 'Allgemeines',
            'slug' => 'allgemein',
            'description' => 'Ein Ort in dem man alles mögliche Fragen kann',
        ]);

        DB::table('categories')->insert([
            'name' => 'IT',
            'slug' => 'it',
            'description' => 'Hier werden IT (Informationstechnologie) Fragen behandlet',
        ]);

        DB::table('categories')->insert([
            'name' => 'Handwerkliches',
            'slug' => 'handwerk',
            'description' => 'Alle Fragen die etwas mit Handwerk zu tun haben',
        ]);

    }
}
