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
            'nombre' => 'cabezal',
              'slug' => Str::slug('cabezal'),
             'created_at' => Carbon::now(),
             'updated_at' => Carbon::now(),
        ]);


        DB::table('categorias')->insert([
            'nombre' => 'carro',
              'slug' => Str::slug('carro'),
             'created_at' => Carbon::now(),
             'updated_at' => Carbon::now(),
        ]);


        DB::table('categorias')->insert([
            'nombre' => 'furgon',
              'slug' => Str::slug('furgon'),
             'created_at' => Carbon::now(),
             'updated_at' => Carbon::now(),
        ]);



    }
}
