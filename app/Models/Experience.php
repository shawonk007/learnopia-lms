<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Experience extends Model
{
    use HasFactory;

    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $fillable = [ 'instructor_id', 'designation', 'organization', 'description', 'join_date', 'leave_date', 'status' ];

    public function instrctor(): BelongsTo {
        return $this->belongsTo(Instructor::class);
    }
}
