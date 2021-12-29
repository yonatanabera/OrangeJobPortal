<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class WorkExperience extends Model
{
    use HasFactory;

    protected $fillable=[
        'user_id',
        'starting_date',
        'ending_date',
        'company',
        'position',
        'description',
        'employment_type',
    ];

    // Return to which user the work experience belongs to. 
    public function user(){
        return $this->belongsTo(User::class);
    }

}
