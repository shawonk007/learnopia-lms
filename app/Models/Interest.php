<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;

class Interest extends Model
{
    use HasFactory;

    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $fillable = [ 'student_id', 'topic_id' ];

    public function student(): BelongsTo {
        return $this->belongsTo(Student::class);
    }

    public function topics(): BelongsToMany {
        return $this->belongsToMany(Topic::class);
    }
}
