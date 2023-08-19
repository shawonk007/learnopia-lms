<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Answer extends Model
{
    use HasFactory;

    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $fillable = [ 'question_id', 'user_id', 'answer', 'status', ];

    public function user(): BelongsTo {
        return $this->belongsTo(User::class);
    }

    public function question(): BelongsTo {
        return $this->belongsTo(Question::class);
    }
}
