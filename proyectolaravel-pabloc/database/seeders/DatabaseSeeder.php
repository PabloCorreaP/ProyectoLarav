<?php

namespace Database\Seeders;

use App\Models\Autore;
use App\Models\Libro;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
       $autor=new Autore();
        $autor->nombre="Brandon";
        $autor->apellidos="Sanderson";
        $autor->id=1;
        $libro=new Libro();
        $libro->nombre="Mistborn";
        $libro->autor_id=1;
        $autor->save();
       $libro->save();
    
       $autor=new Autore();
        $autor->nombre="Terry";
        $autor->apellidos="Pratchett";
        $autor->id=2;
        $libro=new Libro();
        $libro->nombre="Mort";
        $libro->autor_id=2;
        $autor->save();
       $libro->save();
        
       DB::table('users')->insert([
        'name' => 'User1',
        'email' => 'user1@email.com',
        'password' => bcrypt('password'),
    ]);
          
         
    }
}
