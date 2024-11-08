<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class State extends Model
{
    use HasFactory;

    protected $table = 'states';
    protected $primaryKey = 'state_id';
    public $incrementing = false; // Important since state_id is not auto-incremented
    public $timestamps = false; // Disable timestamps if not in the table
}
