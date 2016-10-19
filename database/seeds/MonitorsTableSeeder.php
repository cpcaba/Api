<?php

use Illuminate\Database\Seeder;

class MonitorsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {

      DB::table('monitors')->insert([
        'size'=>'18"',
        'code'=>'M39022A',
        'output'=>'HDMI',
        'client_id'=>'3'
      ]);
      DB::table('monitors')->insert([
        'size'=>'14"',
        'code'=>'MEE122A',
        'output'=>'BGA',
        'client_id'=>'1'
      ]);
      DB::table('monitors')->insert([
        'size'=>'18"',
        'code'=>'BE9022A',
        'output'=>'HDMI',
        'client_id'=>'6'
      ]);
      DB::table('monitors')->insert([
        'size'=>'18"',
        'code'=>'DDF22A',
        'output'=>'DBI',
        'client_id'=>'2'
      ]);
      DB::table('monitors')->insert([
        'size'=>'20"',
        'code'=>'XL9022A',
        'output'=>'HDMI',
        'client_id'=>'1'
      ]);

    }
}
