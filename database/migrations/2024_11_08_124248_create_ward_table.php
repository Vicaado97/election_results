<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateWardTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('ward', function (Blueprint $table) {
            $table->increments('uniqueid'); // Auto-incrementing ID
            $table->integer('ward_id'); // Ward ID
            $table->string('ward_name', 50); // Ward Name
            $table->integer('lga_id'); // LGA ID
            $table->text('ward_description')->nullable(); // Ward description (nullable)
            $table->string('entered_by_user', 50); // User who entered the data
            $table->dateTime('date_entered'); // Date entered
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
        Schema::dropIfExists('ward');
    }
}
