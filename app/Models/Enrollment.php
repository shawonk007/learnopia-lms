<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;

class Enrollment extends Model
{
    use HasFactory;

    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $fillable = [ 'user_id', 'course_id', 'status' ];

    public function user(): BelongsToMany {
        return $this->belongsToMany(User::class);
    }

    public function course(): BelongsToMany {
        return $this->belongsToMany(Course::class);
    }
}
