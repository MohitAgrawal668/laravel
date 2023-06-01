<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Clients extends Model
{
    use HasFactory;
    function getGroup()
        {
            return $this->hasMany('App\Models\ClientGroups','id', 'group_id');
        }
}