<?php

use Illuminate\Database\Seeder;

class ComputersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
      DB::table('computers')->insert([
        'code'=>'A2549W32',
        'specification'=>'Procesador Intel Core(TM)ie28-100, 5GB RAM, 220GHZ',
        'ip'=>'192.168.0.1',
        'lastcheck'=>'2015-10-01',
        'client_id'=>'2'
      ]);

      DB::table('computers')->insert([
        'code'=>'V39022A',
        'specification'=>'Procesador Intel Core(TM)ie28-100, 5GB RAM, 220GHZ',
        'ip'=>'192.168.0.2',
        'lastcheck'=>'2016-01-01',
        'client_id'=>'1'
      ]);
      DB::table('computers')->insert([
        'code'=>'C98S99A',
        'specification'=>'Procesador Intel Core(TM)ie28-100, 5GB RAM, 220GHZ',
        'ip'=>'192.168.0.3',
        'lastcheck'=>'2016-09-01',
        'client_id'=>'3'
      ]);
      DB::table('computers')->insert([
        'code'=>'774093A',
        'specification'=>'Procesador Intel Core(TM)ie28-100, 5GB RAM, 220GHZ',
        'ip'=>'192.168.0.4',
        'lastcheck'=>'2016-05-01',
        'client_id'=>'1'
      ]);
      DB::table('computers')->insert([
        'code'=>'A1124WW',
        'specification'=>'Procesador Intel Core(TM)ie28-100, 5GB RAM, 220GHZ',
        'ip'=>'192.168.0.8',
        'lastcheck'=>'2016-04-01',
        'client_id'=>'6'
      ]);

    }
}
