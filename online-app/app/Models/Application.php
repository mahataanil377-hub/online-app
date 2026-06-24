<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Application extends Model
{
    use HasFactory;

    // Mass assignment allowed fields
    protected $fillable = [
        'user_id',
        'job_id',
        'cover_letter',
        'cv',
        'status',
    ];

    /**
     * Application belongs to User
     */
    public function user()
    {
        return $this->belongsTo(User::class);
    }

    /**
     * Application belongs to Job
     */
    public function job()
    {
        return $this->belongsTo(Job::class);
    }
}