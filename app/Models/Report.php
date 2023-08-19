<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Report extends Model
{
    use HasFactory;

    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $fillable = [ 'user_id', 'instructor_id', 'course_id', 'report_text', 'status' ];

    public function user(): BelongsTo {
        return $this->belongsTo(User::class);
    }

    public function instructor(): BelongsTo {
        return $this->belongsTo(Instructor::class);
    }

    public function course(): BelongsTo {
        return $this->belongsTo(Course::class);
    }
}
