<?php

use Carbon\Carbon;
use Illuminate\Support\Str;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class CategoriaSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {

        DB::table('categorias')->insert([
            'nombre' => 'Cabezales',
              'slug' => Str::slug('Cabezales'),
             'created_at' => Carbon::now(),
             'updated_at' => Carbon::now(),
        ]);


        DB::table('categorias')->insert([
            'nombre' => 'Furgones',
              'slug' => Str::slug('Furgones'),
             'created_at' => Carbon::now(),
             'updated_at' => Carbon::now(),
        ]);


        DB::table('categorias')->insert([
            'nombre' => 'Plataformas',
              'slug' => Str::slug('Plataformas'),
             'created_at' => Carbon::now(),
             'updated_at' => Carbon::now(),
        ]);


        DB::table('categorias')->insert([
            'nombre' => 'Carros',
              'slug' => Str::slug('Carros'),
             'created_at' => Carbon::now(),
             'updated_at' => Carbon::now(),
        ]);


        DB::table('categorias')->insert([
            'nombre' => 'Motos',
              'slug' => Str::slug('Motos'),
             'created_at' => Carbon::now(),
             'updated_at' => Carbon::now(),
        ]);

    }
}
