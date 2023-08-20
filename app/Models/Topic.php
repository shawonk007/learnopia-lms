<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Topic extends Model
{
    use HasFactory;

    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $fillable = [ 'title', 'description', 'slug', 'status', 'popular' ];

    // public function specializations(): HasMany {
    //     return $this->hasMany(Specialization::class);
    // }
    public function specializations(): BelongsToMany {
        return $this->belongsToMany(Instructor::class, 'specializations');
    }

    // public function interests(): HasMany {
    //     return $this->hasMany(Interest::class);
    // }
    public function interests(): BelongsToMany {
        return $this->belongsToMany(Student::class, 'interests');
    }

    // public function courses(): HasMany {
    //     return $this->hasMany(CourseTag::class);
    // }
    public function courses(): BelongsToMany {
        return $this->belongsToMany(Course::class, 'course_tags');
    }

    // public function lessons(): HasMany {
    //     return $this->hasMany(LessonTag::class);
    // }
    public function lessons(): BelongsToMany {
        return $this->belongsToMany(Lesson::class, 'lesson_tags');
    }
}
