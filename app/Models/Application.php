<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Application extends Model
{
    use HasFactory;

    protected $fillable=[
        'user_id',
        'job_id',
        'resume_file_upload',
        'cover_letter',
        
    ];

    // saved for later Applicants, 
    public function users(){
        return $this->belongsToMany(User::class, 'applicant_for_laters', 'application_id', 'user_id');
    }

    public function jobs(){
        return $this->belongsTo(Jobs::class, 'job_id');
    }

}
