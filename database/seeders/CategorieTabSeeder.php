<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class CategorieTabSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $categorie = new \App\Models\Categorie();
        $categorie->nom = 'Biologie';
        $categorie->image = '/image/Categories/biologie.png';
        $categorie->save();

        $categorie = new \App\Models\Categorie();
        $categorie->nom = 'Chimie';
        $categorie->image = '/image/Categories/chimie.png';
        $categorie->save();

        $categorie = new \App\Models\Categorie();
        $categorie->nom = 'Economie';
        $categorie->image = '/image/Categories/economie.png';
        $categorie->save();

        $categorie = new \App\Models\Categorie();
        $categorie->nom = 'Géologie';
        $categorie->image = '/image/Categories/geology.png';
        $categorie->save();

        $categorie = new \App\Models\Categorie();
        $categorie->nom = 'Informatique';
        $categorie->image = '/image/Categories/informatique.png';
        $categorie->save();

        $categorie = new \App\Models\Categorie();
        $categorie->nom = 'Littérature';
        $categorie->image = '/image/Categories/litterature.png';
        $categorie->save();

        $categorie = new \App\Models\Categorie();
        $categorie->nom = 'Mathématiques';
        $categorie->image = '/image/Categories/mathématiques.png';
        $categorie->save();

        $categorie = new \App\Models\Categorie();
        $categorie->nom = 'Physique';
        $categorie->image = '/image/Categories/physique.png';
        $categorie->save();
    }
}
