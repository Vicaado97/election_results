<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Party extends Model
{
    use HasFactory;

    // Specify the associated table
    protected $table = 'party';

    // Define the primary key
    protected $primaryKey = 'id';

    // Disable automatic timestamps
    public $timestamps = false;

    // Define fillable attributes for mass assignment
    protected $fillable = [
        'partyid',
        'partyname',
    ];
}
