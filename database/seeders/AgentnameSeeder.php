<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class AgentnameSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('agentname')->insert([
            ['name_id' => 1, 'firstname' => 'Christian', 'lastname' => 'Emenike', 'email' => 'christian@bincom.net', 'phone' => '08034699500', 'pollingunit_uniqueid' => 1],
            ['name_id' => 2, 'firstname' => 'Ngozi', 'lastname' => 'Emenike', 'email' => 'biggysmalls@home.net', 'phone' => '08089003444', 'pollingunit_uniqueid' => 2],
            ['name_id' => 3, 'firstname' => 'Chinyere', 'lastname' => 'Emenike', 'email' => 'chinyere@emenike.net', 'phone' => '07034532310', 'pollingunit_uniqueid' => 1],
            ['name_id' => 4, 'firstname' => 'Chimezie', 'lastname' => 'Emenike', 'email' => 'chimezie@emenike.net', 'phone' => '07034532322', 'pollingunit_uniqueid' => 2],
        ]);
    }
}
