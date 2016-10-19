<?php

use Illuminate\Database\Seeder;

class ClientsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {

         DB::table('clients')->insert([
          'name'=>'Facundo',
          'lname'=>'Chuburru',
          'sector'=>'Training',
          'email'=>'facundoC@gmail.com.ar',
        ]);

        DB::table('clients')->insert([
          'name'=>'Luis',
          'lname'=>'Campos',
          'sector'=>'Management',
          'email'=>'luisCC@gmail.com.ar',
        ]);
        DB::table('clients')->insert([
          'name'=>'Patricia',
          'lname'=>'Caballero',
          'sector'=>'Training',
          'email'=>'cpcaba@yahoo.com.ar',
        ]);
        DB::table('clients')->insert([
          'name'=>'Marcos',
          'lname'=>'Davila',
          'sector'=>'Development',
          'email'=>'MarcosC@gmail.com.ar',
        ]);

        DB::table('clients')->insert([
          'name'=>'Laura',
          'lname'=>'Garcia',
          'sector'=>'Development',
          'email'=>'LauraC@gmail.com.ar',
        ]);

        DB::table('clients')->insert([
          'name'=>'Leandro',
          'lname'=>'Moreno',
          'sector'=>'Reservation Desk',
          'email'=>'LeandroC@gmail.com.ar',
        ]);
    }
}
