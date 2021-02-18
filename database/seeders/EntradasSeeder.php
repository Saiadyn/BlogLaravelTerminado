<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class EntradasSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('entradas')->truncate();

        DB::table('entradas')->insert([
            "id"=>"1",
            "titulo"=>"entrada n1",
            "texto"=>"lorem ipsum lorem ipsum lorem ipsum lorem ipsum 
            lorem ipsum lorem ipsum lorem ipsum lorem ipsum lorem ipsum lorem ipsum 
            lorem ipsum lorem ipsum lorem ipsum lorem ipsum lorem ipsum lorem ipsum 
            lorem ipsum lorem ipsum lorem ipsum lorem ipsum lorem ipsum lorem ipsum 
            lorem ipsum lorem ipsum lorem ipsum lorem ipsum lorem ipsum lorem ipsum",
        ]);

        DB::table('entradas')->insert([
            "id"=>"2",
            "titulo"=>"entrada n2",
            "texto"=>"lorem ipsum lorem ipsum lorem ipsum lorem ipsum 
            lorem ipsum lorem ipsum lorem ipsum lorem ipsum lorem ipsum lorem ipsum 
            lorem ipsum lorem ipsum lorem ipsum lorem ipsum lorem ipsum lorem ipsum 
            lorem ipsum lorem ipsum lorem ipsum lorem ipsum lorem ipsum lorem ipsum 
            lorem ipsum lorem ipsum lorem ipsum lorem ipsum lorem ipsum lorem ipsum",
        ]);

        DB::table('entradas')->insert([
            "id"=>"3",
            "titulo"=>"entrada n3",
            "texto"=>"lorem ipsum lorem ipsum lorem ipsum lorem ipsum 
            lorem ipsum lorem ipsum lorem ipsum lorem ipsum lorem ipsum lorem ipsum 
            lorem ipsum lorem ipsum lorem ipsum lorem ipsum lorem ipsum lorem ipsum 
            lorem ipsum lorem ipsum lorem ipsum lorem ipsum lorem ipsum lorem ipsum 
            lorem ipsum lorem ipsum lorem ipsum lorem ipsum lorem ipsum lorem ipsum",
        ]);

        DB::table('entradas')->insert([
            "id"=>"4",
            "titulo"=>"entrada n4",
            "texto"=>"lorem ipsum lorem ipsum lorem ipsum lorem ipsum 
            lorem ipsum lorem ipsum lorem ipsum lorem ipsum lorem ipsum lorem ipsum 
            lorem ipsum lorem ipsum lorem ipsum lorem ipsum lorem ipsum lorem ipsum 
            lorem ipsum lorem ipsum lorem ipsum lorem ipsum lorem ipsum lorem ipsum 
            lorem ipsum lorem ipsum lorem ipsum lorem ipsum lorem ipsum lorem ipsum",
        ]);

        DB::table('entradas')->insert([
            "id"=>"5",
            "titulo"=>"entrada n5",
            "texto"=>"lorem ipsum lorem ipsum lorem ipsum lorem ipsum 
            lorem ipsum lorem ipsum lorem ipsum lorem ipsum lorem ipsum lorem ipsum 
            lorem ipsum lorem ipsum lorem ipsum lorem ipsum lorem ipsum lorem ipsum 
            lorem ipsum lorem ipsum lorem ipsum lorem ipsum lorem ipsum lorem ipsum 
            lorem ipsum lorem ipsum lorem ipsum lorem ipsum lorem ipsum lorem ipsum",
        ]);

        DB::table('entradas')->insert([
            "id"=>"6",
            "titulo"=>"entrada n6",
            "texto"=>"lorem ipsum lorem ipsum lorem ipsum lorem ipsum 
            lorem ipsum lorem ipsum lorem ipsum lorem ipsum lorem ipsum lorem ipsum 
            lorem ipsum lorem ipsum lorem ipsum lorem ipsum lorem ipsum lorem ipsum 
            lorem ipsum lorem ipsum lorem ipsum lorem ipsum lorem ipsum lorem ipsum 
            lorem ipsum lorem ipsum lorem ipsum lorem ipsum lorem ipsum lorem ipsum",
        ]);
    }
}