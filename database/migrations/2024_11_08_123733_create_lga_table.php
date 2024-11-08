<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateLgaTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('lga', function (Blueprint $table) {
            $table->increments('uniqueid'); // Auto-incrementing ID
            $table->integer('lga_id'); // LGA ID
            $table->string('lga_name', 50); // LGA name
            $table->integer('state_id'); // State ID
            $table->text('lga_description')->nullable(); // LGA description (nullable)
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
        Schema::dropIfExists('lga');
    }
}
