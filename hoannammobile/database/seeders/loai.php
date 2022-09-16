<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use DB;
class loai extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        for ($i=0; $i<50; $i++) {
            \DB::table('loai')->insert([
                'ten' => 'Dell ' . rand(0,10),
                'logo'=>'',
                'status'=> rand(0,2)
            ]);
         }//for
    }
}
