<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;

class LessonTag extends Model
{
    use HasFactory;

    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $fillable = [ 'lesson_id', 'topic_id' ];

    public function lesson(): BelongsTo {
        return $this->belongsTo(Lesson::class);
    }

    public function topics(): BelongsToMany {
        return $this->belongsToMany(Topic::class);
    }
}
