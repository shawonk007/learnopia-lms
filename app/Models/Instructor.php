<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Instructor extends Model
{
    use HasFactory;

    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $fillable = [ 'user_id', 'website', 'commission', 'ratings', 'featured' ];

    public function user(): BelongsTo {
        return $this->belongsTo(User::class);
    }

    public function experience(): HasMany {
        return $this->hasMany(Experience::class);
    }
}
