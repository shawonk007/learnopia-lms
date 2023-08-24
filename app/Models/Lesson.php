<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Lesson extends Model {
    use HasFactory;

    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $fillable = [ 'course_id', 'title', 'description', 'highlights', 'duration', 'thumbnail', 'slug', 'status' ];

    public function course(): BelongsTo {
        return $this->belongsTo(Course::class);
    }

}
