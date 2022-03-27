<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class Methodpayment extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('metodepayment')->insert([
            [
                'nama_payment'=>"OVO",
                'nomor_payment'=>"0218082167341284",
            ], [
                'nama_payment'=>"GOPAY",
                'nomor_payment'=>"0311082167341284",
            ],[
                'nama_payment'=>"DANA",
                'nomor_payment'=>"2312082167341284",
            ],[
                'nama_payment'=>"Bank Transfer BCA",
                'nomor_payment'=>"7812402841",
            ],[
                'nama_payment'=>"Shoppe Pay",
                'nomor_payment'=>"2017082167341284",
            ],[
                'nama_payment'=>"Tunai",
                'nomor_payment'=>"",
            ],
        ]);
    }
}
