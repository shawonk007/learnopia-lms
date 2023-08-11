<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Contact extends Model {

    use HasFactory;

    protected $fillable = [ 'user_id', 'email_alt', 'phone_alt', 'website', 'address_one', 'address_two', 'division', 'district', 'postal_code' ];

    public function user(): BelongsTo {
        return $this->belongsTo(User::class);
    }
}
