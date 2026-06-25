<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Company extends Model
{
    use HasFactory;

    protected $table = 'companies';

    protected $fillable = [
        'name',
        'email',
        'phone',
        'website',
        'address',
        'country',
        'city',
        'industry',
        'description',
        'logo',
    ];

    // Relationship (यदि Job table छ भने)
    public function jobs()
    {
        return $this->hasMany(Job::class);
    }

}