<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class ServerDatabase extends Model
{
    protected $fillable = [
        'server_id',
        'driver',
        'host',
        'port',
        'name',
        'user',
        'password',
    ];
}
