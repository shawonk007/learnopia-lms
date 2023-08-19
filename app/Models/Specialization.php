<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;

class Specialization extends Model
{
    use HasFactory;
    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $fillable = [ 'instructor_id', 'topic_id' ];

    public function instructor(): BelongsTo {
        return $this->belongsTo(Instructor::class);
    }

    public function topics(): BelongsToMany {
        return $this->belongsToMany(Topic::class);
    }
}
