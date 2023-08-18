<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Database\Eloquent\Relations\HasOne;

class Course extends Model {
    use HasFactory;

    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $fillable = [
        'user_id',
        'category_id',
        'title',
        'course_code',
        'regular_price',
        'offer_price',
        'slug',
        'ratings',
        'status',
        'featured'
    ];

    public function user(): BelongsTo {
        return $this->belongsTo(User::class);
    }

    public function details(): HasOne {
        return $this->hasOne(CourseDetails::class);
    }

    public function topic(): HasMany {
        return $this->hasMany(CourseTag::class);
    }

}
