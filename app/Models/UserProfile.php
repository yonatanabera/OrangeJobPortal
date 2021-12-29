<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class UserProfile extends Model
{
    use HasFactory;

    protected $fillable=[
        'user_id',
        'birthday',
        'gender',
        'address',
        'about',
    ];

    // Return to which user the user profile belongs to, 
    public function user(){
        return $this->belongsTo(User::class);
    }

}
