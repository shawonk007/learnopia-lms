<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Database\Eloquent\Relations\HasOne;

class Course extends Model {
    use HasFactory;

    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $fillable = [ 'user_id', 'category_id', 'title', 'course_code', 'regular_price', 'offer_price', 'slug', 'ratings', 'status', 'featured' ];

    public function user(): BelongsTo {
        return $this->belongsTo(User::class);
    }

    public function category(): BelongsTo {
        return $this->belongsTo(Category::class);
    }

    public function details(): HasOne {
        return $this->hasOne(CourseDetails::class);
    }

    public function topic(): BelongsToMany {
        return $this->belongsToMany(Topic::class, 'course_tags');
    }

    public function lessons(): HasMany {
        return $this->hasMany(Lesson::class);
    }

    public function modules(): HasMany {
        return $this->hasMany(Module::class);
    }

    public function enrollments(): HasMany {
        return $this->hasMany(Enrollment::class);
    }

    public function question(): HasMany {
        return $this->hasMany(Question::class);
    }

    public function reports(): HasMany {
        return $this->hasMany(Report::class);
    }

    public function feedback(): HasMany {
        return $this->hasMany(Feedback::class);
    }

    public function payments(): HasMany {
        return $this->hasMany(Payment::class);
    }

}
