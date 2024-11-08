<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePollingUnitTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('polling_unit', function (Blueprint $table) {
            $table->increments('uniqueid'); // Auto-incrementing ID
            $table->integer('polling_unit_id'); // Polling Unit ID
            $table->integer('ward_id'); // Ward ID
            $table->integer('lga_id'); // LGA ID
            $table->integer('uniquewardid')->nullable(); // Unique Ward ID (nullable)
            $table->string('polling_unit_number', 50)->nullable(); // Polling Unit number (nullable)
            $table->string('polling_unit_name', 50)->nullable(); // Polling Unit name (nullable)
            $table->text('polling_unit_description')->nullable(); // Polling Unit description (nullable)
            $table->string('lat', 255)->nullable(); // Latitude (nullable)
            $table->string('long', 255)->nullable(); // Longitude (nullable)
            $table->string('entered_by_user', 50)->nullable(); // User who entered the data (nullable)
            $table->dateTime('date_entered')->nullable(); // Date entered (nullable)
            $table->string('user_ip_address', 50)->nullable(); // User's IP address (nullable)
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('polling_unit');
    }
}
