<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class category extends Model
{
 
    protected $table = 'categories';

    /**
     * Fillable fields
     */
    protected $fillable = [
        'name',
        'icon',
        'status',
    ];
    


}