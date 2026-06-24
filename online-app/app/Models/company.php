<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class company extends Model
{    
    protected $table = 'companies';

    protected $fillable = [
        'name',
        'company_name',
        'logo',
        'email',
        'phone',
        'location',
    ];
}
