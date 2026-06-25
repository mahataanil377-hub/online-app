<?php

namespace App\Models;
use App\Models\Category;

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
    
         public function applications()
    {
        return $this->hasMany(Application::class);
    }

}