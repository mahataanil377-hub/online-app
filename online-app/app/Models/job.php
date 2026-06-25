<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Company;
use App\Models\Application;

class Job extends Model
{
    use HasFactory;

    protected $fillable = [
        'title',
        'company_id',
        'location',
        'status',
        'job_type',
        'description',
    ];

    // Job belongs to Company
    public function company()
    {
    
    }

    // Job has many Applications
    public function applications()
    {
        return $this->hasMany(Application::class);
    }
}