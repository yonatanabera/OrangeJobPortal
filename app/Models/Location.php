<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Location extends Model
{
    use HasFactory;

    protected $fillable=[
        'name',
    ];

    // List of jobs, in some specific location.
    public function jobs(){
        return $this->hasMany(Jobs::class,'location_id');
    }

}
