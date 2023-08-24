<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class CourseDetails extends Model
{
    use HasFactory;

    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $fillable = [ 'course_id', 'thumbnail', 'description', 'highlights', 'duration', 'difficulty' ];

    public function course(): BelongsTo {
        return $this->belongsTo(Course::class);
    }
}
