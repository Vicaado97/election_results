<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class AnnouncedStateResult extends Model
{
    use HasFactory;

    // Define the table associated with the model
    protected $table = 'announced_state_results';

    // Define the primary key
    protected $primaryKey = 'result_id';

    // Disable timestamps as the table doesn't have `created_at` or `updated_at` columns
    public $timestamps = false;

    // Define fillable properties for mass assignment
    protected $fillable = [
        'state_name',
        'party_abbreviation',
        'party_score',
        'entered_by_user',
        'date_entered',
        'user_ip_address'
    ];
}
