<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ExtracurricularActivity extends Model
{
    use HasFactory;

    protected $fillable=[
        'user_id',
        'role',
        'organization',
        'starting_date',
        'ending_date',
        'summary'
    ];

    // Return to which user the extracurricular activity belongs to.
    public function user(){
        return $this->belongsTo(User::class);
    }

}
