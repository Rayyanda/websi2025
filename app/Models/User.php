<?php

namespace App\Models;

// use Illuminate\Contracts\Auth\MustVerifyEmail;
use Filament\Models\Contracts\FilamentUser;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Illuminate\Support\Str;
use Filament\Panel;

class User extends Authenticatable implements FilamentUser
{
    /** @use HasFactory<\Database\Factories\UserFactory> */
    use HasFactory, Notifiable;
    protected static function boot()
    {
        parent::boot();

        // Auto-generate UUID saat membuat record baru
        static::creating(function ($model) {
            $model->user_uuid = Str::uuid(); // UUID versi 4
        });
    }
    public function canAccessPanel(Panel $panel): bool
    {
        //return str_ends_with($this->email, '@unsada.ac.id') && $this->hasVerifiedEmail();
        return in_array($this->email, [
            'ekayuniastuty@yahoo.com',
            'si.unsada@gmail.com',
        ]);

    }
    /**
     * The attributes that are mass assignable.
     *
     * @var list<string>
     */
    protected $fillable = [
        'user_uuid',
        'name',
        'email',
        'password',
        'role',
    ];

    /**
     * The attributes that should be hidden for serialization.
     *
     * @var list<string>
     */
    protected $hidden = [
        'password',
        'remember_token',
    ];

    /**
     * Get the attributes that should be cast.
     *
     * @return array<string, string>
     */
    protected function casts(): array
    {
        return [
            'email_verified_at' => 'datetime',
            'password' => 'hashed',
        ];
    }
}
