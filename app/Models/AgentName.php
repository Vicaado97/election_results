<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class AgentName extends Model
{
    use HasFactory;

    // Define the table associated with the model
    protected $table = 'agentname';

    // Specify the primary key field
    protected $primaryKey = 'name_id';

    // Disable timestamps if they are not present in your table
    public $timestamps = false;

    // Specify the fillable fields
    protected $fillable = [
        'firstname',
        'lastname',
        'email',
        'phone',
        'pollingunit_uniqueid',
    ];
}
