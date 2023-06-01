<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class CompanyAddress extends Model
{
    use HasFactory;
    function getCompany()
        {
           return  $this->hasOne("App\Models\Company","id");
        }
}
