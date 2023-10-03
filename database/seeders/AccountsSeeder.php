<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class AccountsSeeder extends Seeder
{
    public function run()
    {
        DB::table('accounts')->insert([
            [
                'nama' => 'John Doe',
                'saldo' => 1000.00,
            ],
            [
                'nama' => 'Jane Smith',
                'saldo' => 2500.50,
            ],
            // Tambahkan data lain jika diperlukan
        ]);
    }
}
