<?php

namespace Database\Seeders;

use App\Models\Email;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class EmailSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
         DB::table('emails')->insert([        
            'email' => 'edu.univ-fcomte.fr',
        ]);
        DB::table('emails')->insert([        
            'email' => 'etu.univ-lyon1.fr',
        ]);
        DB::table('emails')->insert([        
            'email' => 'etudiant.univ-brest.fr',
        ]);
        DB::table('emails')->insert([        
            'email' => 'etu.uca.fr',
        ]);
        DB::table('emails')->insert([        
            'email' => 'etu.u-bourgogne.fr',
        ]);
        DB::table('emails')->insert([        
            'email' => 'etu.univ-grenoble-alpes.fr',
        ]);
        DB::table('emails')->insert([        
            'email' => 'lacatholille.fr ',
        ]);
        DB::table('emails')->insert([        
            'email' => 'univ-lille.fr',
        ]);
        DB::table('emails')->insert([        
            'email' => 'etu.univ-amu.fr',
        ]);
        DB::table('emails')->insert([        
            'email' => 'etu.unilim.fr',
        ]);
        DB::table('emails')->insert([        
            'email' => 'etu.univ-lorraine.fr',
        ]);
        DB::table('emails')->insert([        
            'email' => 'etu.univ-nantes.fr',
        ]);
        DB::table('emails')->insert([        
            'email' => 'etu.umontpellier.fr',
        ]);
        DB::table('emails')->insert([        
            'email' => 'etu.sorbonne-universite.fr',
        ]);
        DB::table('emails')->insert([        
            'email' => 'etu.univ-poitiers.fr',
        ]);
        DB::table('emails')->insert([        
            'email' => 'etudiant.univ-reims.fr',
        ]);
        DB::table('emails')->insert([        
            'email' => 'ifchurennes.fr',
        ]);
        DB::table('emails')->insert([        
            'email' => 'etu.unistra.fr',
        ]);
        DB::table('emails')->insert([        
            'email' => 'co.univ-reunion.fr',
        ]);
        DB::table('emails')->insert([        
            'email' => 'ies-reunion.fr',
        ]);
        DB::table('emails')->insert([        
            'email' => 'teste@test.com',
        ]);
        DB::table('emails')->insert([        
            'email' => 'etud.u-picardie.fr',
        ]);
        DB::table('emails')->insert([        
            'email' => 'etud.univ-angers.fr',
        ]);
        DB::table('emails')->insert([        
            'email' => 'etu.u-bordeaux.fr',
        ]);
        DB::table('emails')->insert([        
            'email' => 'etu.unicaen.fr',
        ]);
        DB::table('emails')->insert([        
            'email' => 'etu.univ-cotedazur.fr ',
        ]);
        DB::table('emails')->insert([        
            'email' => 'etu.u-paris.fr',
        ]);
        DB::table('emails')->insert([        
            'email' => 'ens.uvsq.fr',
        ]);
        DB::table('emails')->insert([        
            'email' => 'etu.univ-rouen.fr',
        ]);
        DB::table('emails')->insert([        
            'email' => 'univ-tlse3.fr',
        ]);
        DB::table('emails')->insert([        
            'email' => 'etu.univ-tours.fr',
        ]);
    }
}
