<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Education extends Model
{
    use HasFactory;

    protected $fillable=[
        'user_id',
        'school',
        'degree',
        'field_of_study',
        'starting_date',
        'ending_date',
        'grade',
        'description',
    ];

    // Return to which user the education belongs to. 
    public function user(){
        return $this->belongsTo(User::class);
    }

}
