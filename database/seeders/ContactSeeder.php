<?php

namespace Database\Seeders;

use Illuminate\Support\Str;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ContactSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $data = [];
        for ($i = 0; $i < 10; $i++) {
            $data[] = [
                'phone' => Str::random(10),
                'name' => Str::random(10),
                'address' => Str::random(20),
                'email' => Str::random(4) . Str::random(3) . '@gmail.com',

            ];
        }
        DB::table('contacts')->insert($data);
    }
}
