<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class UserTabSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $utilisateur = new \App\Models\User();
        $utilisateur->nom = 'HAOUCH Salma';
        $utilisateur->email = 'salmahaouch@uit.ac.ma';
        $utilisateur->usertype = 'bibliothecaire';
        $utilisateur->telephone = '0755453432';
        $utilisateur->mdp = 'FFRGHJLMMM';
        $utilisateur->save();

        $utilisateur = new \App\Models\User();
        $utilisateur->nom = 'LCHHAB Lamiae';
        $utilisateur->email = 'lamiaelchhab@uit.ac.ma';
        $utilisateur->usertype = 'adherent';
        $utilisateur->telephone = '0657438976';
        $utilisateur->mdp = '674794RR';
        $utilisateur->save();

        $utilisateur = new \App\Models\User();
        $utilisateur->nom = 'KMIRA Hassan';
        $utilisateur->email = 'hassankmira@uit.ac.ma';
        $utilisateur->usertype = 'adherent';
        $utilisateur->telephone = '0688784523';
        $utilisateur->mdp = 'LLPPbbn';
        $utilisateur->save();

        $utilisateur = new \App\Models\User();
        $utilisateur->nom = 'NASSIRI Laila';
        $utilisateur->email = 'lailanassiri@uit.ac.ma';
        $utilisateur->usertype = 'adherent';
        $utilisateur->telephone = '0645785689';
        $utilisateur->mdp = 'hhiikill';
        $utilisateur->save();

        $utilisateur = new \App\Models\User();
        $utilisateur->nom = 'BOUFRID Mourad';
        $utilisateur->email = 'mouradboufrid@uit.ac.ma';
        $utilisateur->usertype = 'adherent';
        $utilisateur->telephone = '0699004457';
        $utilisateur->mdp = 'EDGKi533';
        $utilisateur->save();
    }
}
