<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class VirtualServer extends Model
{
    protected $fillable = [
        'name',
        'status',
        'console_output'
    ];
}
