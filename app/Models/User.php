<?php

namespace App\Models;

use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Laravel\Fortify\TwoFactorAuthenticatable;
use Laravel\Jetstream\HasProfilePhoto;
use Laravel\Sanctum\HasApiTokens;

class User extends Authenticatable
{
    use HasApiTokens;
    use HasFactory;
    use HasProfilePhoto;
    use Notifiable;
    use TwoFactorAuthenticatable;

    /**
     * The attributes that are mass assignable.
     *
     * @var string[]
     */
    protected $fillable = [
        'name',
        'email',
        'password',
        'phone',
        'role',
    ];

    /**
     * The attributes that should be hidden for serialization.
     *
     * @var array
     */
    protected $hidden = [
        'password',
        'remember_token',
        'two_factor_recovery_codes',
        'two_factor_secret',
    ];

    /**
     * The attributes that should be cast.
     *
     * @var array
     */
    protected $casts = [
        'email_verified_at' => 'datetime',
    ];

    /**
     * The accessors to append to the model's array form.
     *
     * @var array
     */
    protected $appends = [
        'profile_photo_url',
    ];

    // Saved for later Applicants Application, for employer
    public function saved_applications(){
        return $this->belongsToMany(Application::class, 'applicant_for_laters', 'user_id', 'application_id');
    }

    // Saved for later Jobs, for job seekers
    public function saved_jobs(){
        return $this->belongsToMany(Jobs::class, 'job_for_laters', 'user_id', 'job_id');
    }

    // Applied list of jobs, for job seekers
    public function applied_jobs(){
        return $this->belongsToMany(Jobs::class, 'applications', 'user_id', 'job_id');
    }

    // User profile, language skills
    public function language_skills(){
        return $this->hasMany(LanguageSkill::class,'user_id');
    }

    // User profile, Skills
    public function skills(){
        return $this->hasMany(Skill::class, 'user_id');
    }

    // User Profile, Extra Curricular activities
    public function extra_curricular_activities(){
        return $this->hasMany(ExtracurricularActivity::class, 'user_id');
    }

    // User profile, Certifications
    public function certifications(){
        return $this->hasMany(Certification::class, 'user_id');
    }

    // User profile, Educations
    public function educations(){
        return $this->hasMany(Education::class, 'user_id');
    }

    // User Profile, Work Experiences, 
    public function work_experiences(){
        return $this->hasMany(WorkExperience::class, 'user_id');
    }

    // user profile , profile page
    public function user_profile(){
        return $this->hasMany(UserProfile::class, 'user_id');
    }

    // Companies
    public function companies(){
        return $this->hasMany(Company::class, 'user_id');
    }

    
}
