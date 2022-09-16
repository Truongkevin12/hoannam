<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class sanpham extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        for ($i=0; $i<50; $i++) {
            \DB::table('sanpham')->insert([
                'ten_sp' => 'Samsung ' . rand(0,10),
                'logo'=>'',
                'khuyen_mai'=>'50',
                'chi_tiet'=>'aefremgrgfeg',
                'gia'=>60000,
                'image'=>'http:anhmoi.com',
                'status'=> rand(0,2)
            ]);
         }//for
    }
}
