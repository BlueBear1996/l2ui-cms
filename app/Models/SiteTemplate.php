<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class SiteTemplate extends Model
{
    protected $fillable = [
        'name',
        'path',
        'active',
    ];
}
