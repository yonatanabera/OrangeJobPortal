<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Package extends Model
{
    use HasFactory;

    protected $fillable=[
        'name',
        'price',
        'duration',
        'description',
    ];

    // List of companies with specific package
    public function companies(){
        return $this->belongsToMany(Company::class, 'company_packages', 'package_id', 'company_id');
    }
    
}
