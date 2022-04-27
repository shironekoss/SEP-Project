<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

class Akun extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $password = Hash::make('123');
        DB::table('akun')->insert([
            [
                'akun_user'=>"meja1",
                'akun_nama'=>"Meja 1",
                'akun_password'=>"$password",
                'akun_role'=>"customer",
                'status'=>"available",
            ], [
                'akun_user'=>"meja2",
                'akun_nama'=>"Meja 2",
                'akun_password'=>"$password",
                'akun_role'=>"customer",
                'status'=>"available",
            ], [
                'akun_user'=>"meja3",
                'akun_nama'=>"Meja 3",
                'akun_password'=>"$password",
                'akun_role'=>"customer",
                'status'=>"available",
            ],[
                'akun_user'=>"meja4",
                'akun_nama'=>"Meja 4",
                'akun_password'=>"$password",
                'akun_role'=>"customer",
                'status'=>"available",
            ],[
                'akun_user'=>"meja5",
                'akun_nama'=>"Meja 5",
                'akun_password'=>"$password",
                'akun_role'=>"customer",
                'status'=>"available",
            ],[
                'akun_user'=>"meja6",
                'akun_nama'=>"Meja 6",
                'akun_password'=>"$password",
                'akun_role'=>"customer",
                'status'=>"available",
            ],[
                'akun_user'=>"kasir",
                'akun_nama'=>"Kasir",
                'akun_password'=>"$password",
                'akun_role'=>"kasir",
                'status'=>"",
            ],[
                'akun_user'=>"pemilik",
                'akun_nama'=>"Pemilik",
                'akun_password'=>"$password",
                'akun_role'=>"owner",
                'status'=>"",
            ],[
                'akun_user'=>"dapur",
                'akun_nama'=>"Chef",
                'akun_password'=>"$password",
                'akun_role'=>"dapur",
                'status'=>"",
            ],
        ]);
    }
}
