<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class AnnouncedWardResult extends Model
{
    use HasFactory;

    // Specify the associated table
    protected $table = 'announced_ward_results';

    // Define the primary key
    protected $primaryKey = 'result_id';

    // Disable automatic timestamps
    public $timestamps = false;

    // Define fillable attributes for mass assignment
    protected $fillable = [
        'ward_name',
        'party_abbreviation',
        'party_score',
        'entered_by_user',
        'date_entered',
        'user_ip_address'
    ];
}
