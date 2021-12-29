<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Jobs extends Model
{
    use HasFactory;

    protected $fillable=[
        'company_id',
        'category_id',
        'location_id',
        'name',
        'career_type',
        'employment_type',
        'salary',
        'requirement',
        'description',
        'how_to_apply',
        'posted_on',
        'deadline',
    ];

    // Saved for later jobs, users list, inverse of saved_jobs
    public function who_saved_the_job(){
        return $this->belongsToMany(User::class, 'job_for_laters', 'job_id', 'user_id');
    }

    // Show the list of candidates who applied for specific job. 
    public function applied_candidates(){
        return $this->belongsToMany(User::class, 'applications', 'job_id', 'user_id');
    }

    // Show which company posted the job. 
    public function company(){
        return $this->belongsTo(Company::class);
    }

    //Show in which category the job is from. 
    public function category(){
        return $this->belongsTo(Category::class);
    }

    // Show in which location the job is. 
    public function location(){
        return $this->belongsTo(Location::class);
    }

}
