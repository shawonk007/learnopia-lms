<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Category extends Model {
    use HasFactory;

    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $fillable = [ 'title', 'description', 'parent_id', 'slug', 'status', 'featured' ];

    public function parent(): BelongsTo {
        return $this->belongsTo(Category::class, 'parent_id');
    }

    public function courses(): HasMany {
        return $this->hasMany(Course::class);
    }
}
