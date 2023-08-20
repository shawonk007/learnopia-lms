<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;

class CourseTag extends Model
{
    use HasFactory;

    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $fillable = [ 'course_id', 'topic_id' ];

    public function course(): BelongsTo {
        return $this->belongsTo(Course::class);
    }

    public function topic(): BelongsTo {
        return $this->belongsTo(Topic::class);
    }
}
