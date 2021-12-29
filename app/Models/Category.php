<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    use HasFactory;

    protected $fillable=[
        'name',
    ];

    // List of jobs that are mentioned under that category. 
    public function jobs(){
        return $this->hasMany(Jobs::class, 'category_id');
    }

}
