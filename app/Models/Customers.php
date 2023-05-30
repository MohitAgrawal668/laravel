<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Customers extends Model
{
    use HasFactory;
    use SoftDeletes;
    protected $table = "customers";
    protected $primaryKey = "id";

    //set an accessor
    public function setNameAttribute($value)
        {
            $this->attributes['name'] = ucwords($value);
        }

    //set accessor
    public function getDobAttribute($date)
        {       
             return date("d M, Y", strtotime($date));   
        }
}
