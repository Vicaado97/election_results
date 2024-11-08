<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateAnnouncedWardResultsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('announced_ward_results', function (Blueprint $table) {
            $table->increments('result_id'); // Auto-incrementing ID
            $table->string('ward_name', 50); // Ward name
            $table->char('party_abbreviation', 4); // Party abbreviation
            $table->integer('party_score'); // Party score
            $table->string('entered_by_user', 50); // User who entered the data
            $table->dateTime('date_entered'); // Date and time of data entry
            $table->string('user_ip_address', 50); // User's IP address
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('announced_ward_results');
    }
}
