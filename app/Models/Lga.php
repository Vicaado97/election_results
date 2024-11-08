<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Lga extends Model
{
    use HasFactory;

    // Specify the associated table
    protected $table = 'lga';

    // Define the primary key
    protected $primaryKey = 'uniqueid';

    // Disable automatic timestamps
    public $timestamps = false;

    // Define fillable attributes for mass assignment
    protected $fillable = [
        'lga_id',
        'lga_name',
        'state_id',
        'lga_description',
        'entered_by_user',
        'date_entered',
        'user_ip_address'
    ];
}
