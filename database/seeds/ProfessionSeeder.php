<?php

use Illuminate\Database\Seeder;
Use Illuminate\Support\Facades\DB;

class ProfessionSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('professions')->insert([
            'title'=> 'Profesor',
        ]);

        DB::table('professions')->insert([
            'title'=> 'Floristero',
        ]);

        DB::table('professions')->insert([
            'title'=> 'Repartidor',
        ]);
    }
}
