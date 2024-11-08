<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Ward extends Model
{
    use HasFactory;

    // Define the table name
    protected $table = 'ward';

    // Define the primary key
    protected $primaryKey = 'uniqueid';

    // Disable timestamps
    public $timestamps = false;

    // Define fillable attributes for mass assignment
    protected $fillable = [
        'ward_id',
        'ward_name',
        'lga_id',
        'ward_description',
        'entered_by_user',
        'date_entered',
        'user_ip_address',
    ];
}
