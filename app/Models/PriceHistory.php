<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class PriceHistory extends Model
{
    use HasFactory;
    protected $table = "price_history";

    protected $fillable = [
        'course_id',
        'old_price',
        'new_price',
        'changed_at',
    ];

    // Relations
    public function course()
    {
        return $this->belongsTo(Course::class);
    }
}
