<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class LanguageSkill extends Model
{
    use HasFactory;

    protected $fillable=[
        'user_id',
        'language_skill',
        'proficiency_level',
    ];

    // Return to which user, the language skill is for. 
    public function user(){
        return $this->belongsTo(User::class);
    }

}
