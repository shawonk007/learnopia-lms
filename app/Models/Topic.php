<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
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

    public function specializations(): HasMany {
        return $this->hasMany(Specialization::class);
    }

    public function interests(): HasMany {
        return $this->hasMany(Interest::class);
    }

    public function courses(): HasMany {
        return $this->hasMany(CourseTag::class);
    }

    public function lessons(): HasMany {
        return $this->hasMany(LessonTag::class);
    }
}
