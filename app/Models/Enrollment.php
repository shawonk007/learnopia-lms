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
    protected $fillable = [ 'student_id', 'course_id', 'status' ];

    public function student(): BelongsToMany {
        return $this->belongsToMany(Student::class);
    }

    public function course(): BelongsToMany {
        return $this->belongsToMany(Course::class);
    }
}
