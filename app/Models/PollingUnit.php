<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class PollingUnit extends Model
{
    use HasFactory;

    protected $table = 'polling_unit';

    // Set the primary key as `uniqueid`
    protected $primaryKey = 'uniqueid';

    public $incrementing = true;
    protected $fillable = [
        'polling_unit_id',  // Polling Unit ID
        'ward_id',          // Ward ID
        'lga_id',           // LGA ID
        'uniquewardid',     // Unique Ward ID
        'polling_unit_number', // Polling Unit Number
        'polling_unit_name',   // Polling Unit Name
        'polling_unit_description', // Polling Unit Description
        'lat',              // Latitude
        'long',             // Longitude
        'entered_by_user', // User who entered the data
        'date_entered',    // Date entered
        'user_ip_address', // User's IP address
    ];

    public $timestamps = false;

    // In the PollingUnit model
    public function announcedPuResults()
    {
        return $this->hasMany(AnnouncedPuResult::class, 'polling_unit_uniqueid', 'polling_unit_id');
    }

}

