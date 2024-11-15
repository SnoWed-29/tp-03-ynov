<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Lesson extends Model
{

    use HasFactory;
    protected $table = "lessons";
    protected $fillable = [
        'course_id',
        'title',
        'content',
        'duration',
        'order_num',
    ];

    // Relations
    public function course()
    {
        return $this->belongsTo(Course::class);
    }

    public function progressTrackings()
    {
        return $this->hasMany(ProgressTracking::class);
    }
}
