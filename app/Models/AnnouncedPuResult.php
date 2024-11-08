<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class AnnouncedPuResult extends Model
{
    use HasFactory;

    // Define the table associated with the model
    protected $table = 'announced_pu_results';

    // Define the primary key
    protected $primaryKey = 'result_id';

    // Disable timestamps if the table does not have `created_at` and `updated_at` columns
    public $timestamps = false;

    // Define fillable properties for mass assignment
    protected $fillable = [
        'polling_unit_uniqueid',
        'party_abbreviation',
        'party_score',
        'entered_by_user',
        'date_entered',
        'user_ip_address'
    ];
}
