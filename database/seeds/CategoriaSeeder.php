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
            'nombre' => 'Pagina-informativa',
              'slug' => Str::slug('pagina-informativa'),
             'created_at' => Carbon::now(),
             'updated_at' => Carbon::now(),
        ]);


        DB::table('categorias')->insert([
            'nombre' => 'Pagina-portafolio',
              'slug' => Str::slug('pagina-portafolio'),
             'created_at' => Carbon::now(),
             'updated_at' => Carbon::now(),
        ]);


        DB::table('categorias')->insert([
            'nombre' => 'Pagina-ecommerce',
              'slug' => Str::slug('pagina-ecommerce'),
             'created_at' => Carbon::now(),
             'updated_at' => Carbon::now(),
        ]);



    }
}
