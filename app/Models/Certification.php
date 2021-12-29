<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Certification extends Model
{
    use HasFactory;

    protected $fillable=[
        'user_id',
        'name',
        'issued_by',
        'time_of_issuance',
    ];

    // Return to which user the certificate belongs to. 
    public function user(){
        return $this->belongsTo(User::class);
    }

}
