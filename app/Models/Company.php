<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Company extends Model
{
    use HasFactory;

    protected $fillable=[
        'user_id',
        'name',
        'location',
        'about_us',
        'profile_picture',
        'our_socials',
        'subscription_plan',
    ];

    // List of Jobs the company has posted. 
    public function jobs(){
        return $this->hasMany(Jobs::class, 'company_id');
    }

    // List of packages, the company has ever used. 
    public function packages(){
        return $this->belongsToMany(Package::class, 'company_packages', 'company_id', 'package_id');
    }

    // Company Owner
    public function user(){
        return $this->belongsTo(User::class);
    }

}
