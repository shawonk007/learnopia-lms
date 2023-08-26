<?php

namespace App\Models;

// use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Laravel\Sanctum\HasApiTokens;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasOne;
use Illuminate\Database\Eloquent\Relations\HasMany;

class User extends Authenticatable {
    
    use HasApiTokens, HasFactory, Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $fillable = [ 'firstname', 'lastname', 'username', 'email', 'phone', 'password', 'role_id', 'status' ];

    /**
     * The attributes that should be hidden for serialization.
     *
     * @var array<int, string>
     */
    protected $hidden = [
        'password',
        'remember_token',
    ];

    /**
     * The attributes that should be cast.
     *
     * @var array<string, string>
     */
    protected $casts = [
        'email_verified_at' => 'datetime',
        'password' => 'hashed',
    ];

    public function role(): BelongsTo {
        return $this->belongsTo(Role::class);
    }

    public function profile(): HasOne {
        return $this->hasOne(Profile::class);
    }

    public function education(): HasMany {
        return $this->hasMany(Education::class);
    }

    public function instructor(): HasOne {
        return $this->hasOne(Instructor::class);
    }

    public function student(): HasOne {
        return $this->hasOne(Student::class);
    }

    public function social(): HasOne {
        return $this->hasOne(Social::class);
    }

    public function courses(): HasMany {
        return $this->hasMany(Course::class);
    }

    public function questions(): HasMany {
        return $this->hasMany(Question::class);
    }

    public function answers(): HasMany {
        return $this->hasMany(Answer::class);
    }

    public function reports(): HasMany {
        return $this->hasMany(Report::class);
    }

    public function feedback(): HasMany {
        return $this->hasMany(Feedback::class);
    }

    public function enrollments(): HasMany {
        return $this->hasMany(Enrollment::class);
    }

    public function payments(): HasMany {
        return $this->hasMany(Payment::class);
    }
}
