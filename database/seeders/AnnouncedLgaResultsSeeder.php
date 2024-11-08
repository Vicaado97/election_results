<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class AnnouncedLgaResultsSeeder extends Seeder
{
    public function run()
    {
        DB::table('announced_lga_results')->insert([
            ['result_id' => 1, 'lga_name' => '33', 'party_abbreviation' => 'PDP', 'party_score' => 78129, 'entered_by_user' => '', 'date_entered' => '2011-04-27 09:46:05', 'user_ip_address' => '192.168.1.110'],
            ['result_id' => 2, 'lga_name' => '33', 'party_abbreviation' => 'DPP', 'party_score' => 15248, 'entered_by_user' => '', 'date_entered' => '2011-04-27 09:46:05', 'user_ip_address' => '192.168.1.110'],
            ['result_id' => 3, 'lga_name' => '33', 'party_abbreviation' => 'ACN', 'party_score' => 8597, 'entered_by_user' => '', 'date_entered' => '2011-04-27 09:46:05', 'user_ip_address' => '192.168.1.110'],
            ['result_id' => 4, 'lga_name' => '33', 'party_abbreviation' => 'PPA', 'party_score' => 797, 'entered_by_user' => '', 'date_entered' => '2011-04-27 09:46:05', 'user_ip_address' => '192.168.1.110'],
            ['result_id' => 5, 'lga_name' => '33', 'party_abbreviation' => 'CDC', 'party_score' => 79513, 'entered_by_user' => '', 'date_entered' => '2011-04-27 09:46:05', 'user_ip_address' => '192.168.1.110'],
            ['result_id' => 6, 'lga_name' => '33', 'party_abbreviation' => 'JP', 'party_score' => 95174, 'entered_by_user' => '', 'date_entered' => '2011-04-27 09:46:05', 'user_ip_address' => '192.168.1.110'],
            ['result_id' => 7, 'lga_name' => '33', 'party_abbreviation' => 'ANPP', 'party_score' => 37330, 'entered_by_user' => '', 'date_entered' => '2011-04-27 09:46:05', 'user_ip_address' => '192.168.1.110'],
            ['result_id' => 8, 'lga_name' => '33', 'party_abbreviation' => 'LABO', 'party_score' => 1126, 'entered_by_user' => '', 'date_entered' => '2011-04-27 09:46:05', 'user_ip_address' => '192.168.1.110'],
            ['result_id' => 9, 'lga_name' => '33', 'party_abbreviation' => 'CPP', 'party_score' => 93643, 'entered_by_user' => '', 'date_entered' => '2011-04-27 09:46:05', 'user_ip_address' => '192.168.1.110'],
            ['result_id' => 19, 'lga_name' => '1', 'party_abbreviation' => 'PDP', 'party_score' => 79659, 'entered_by_user' => '', 'date_entered' => '2011-04-27 09:49:55', 'user_ip_address' => '192.168.1.110'],
            // Add more records as needed
        ]);
    }
}
