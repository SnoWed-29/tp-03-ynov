<?php

namespace App\Models;

// use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;

class User extends Authenticatable
{
    use HasFactory;
    protected $table = "users";
    protected $fillable = [
        'first_name',
        'last_name',
        'email',
        'password_hash',
        'role',
    ];

    // Relations
    public function courses()
    {
        return $this->hasMany(Course::class, 'teacher_id');
    }

    public function enrollments()
    {
        return $this->hasMany(Enrollment::class, 'student_id');
    }

    public function progressTrackings()
    {
        return $this->hasMany(ProgressTracking::class, 'student_id');
    }
}
