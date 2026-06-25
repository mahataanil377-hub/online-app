<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Job extends Model
{
    use HasFactory;

    protected $fillable = [
        'company_id',
        'title',
        'description',
        'job_type',
        'position',
        'startup',  
        'experience',
        'location',
    ];

    // Relationship: Job belongs to Company
    public function company()
    {
        return $this->belongsTo(Company::class);
    }

    // Relationship: Job has many Applications
    public function applications()
    {
        return $this->hasMany(Application::class);
    }

    // Relationship: Job has many Categories
    public function categories()
    {
        return $this->belongsToMany(Category::class);
    }
  
}