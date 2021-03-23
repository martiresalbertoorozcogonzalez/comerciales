<?php

use Carbon\Carbon;
use Illuminate\Database\Seeder;

class CondicionSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('condicions')->insert([
            'nombre' => 'Nuevo',
             'created_at' => Carbon::now(),
             'updated_at' => Carbon::now(),
        ]);

        DB::table('condicions')->insert([
            'nombre' => 'Usado',
             'created_at' => Carbon::now(),
             'updated_at' => Carbon::now(),
        ]);
    }
}
