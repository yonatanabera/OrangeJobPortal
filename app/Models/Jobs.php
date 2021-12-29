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

}
