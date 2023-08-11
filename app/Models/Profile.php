<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Profile extends Model {
    use HasFactory;

    protected $fillable = [ 'user_id', 'avatar', 'biography', 'date_of_birth', 'nationality', 'gender', 'religion', 'marital' ];

    protected $casts = [
        'date_of_birth' => 'date',
    ];

    public function user(): BelongsTo {
        return $this->belongsTo(User::class);
    }

}
