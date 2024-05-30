<?php

namespace App\Models;

// use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Illuminate\Database\Eloquent\Relations\HasMany;

class User extends Authenticatable
{
    use HasFactory, Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $fillable = [
        'name',
        'email',
        'password',
    ];

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

    /**
     * Get all of the userContact for the User
     *
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function userContact(): HasMany
    {
        return $this->hasMany(userContact::class);
    }

    /**
     * Get all of the userSkills for the User
     *
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function userSkills(): HasMany
    {
        return $this->hasMany(UserSkills::class);
    }

    /**
     * Get all of the userSocialMedia for the User
     *
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function userSocialMedia(): HasMany
    {
        return $this->hasMany(UserSocialMedia::class);
    }

    /**
     * Get the profile associated with the User
     *
     * @return \Illuminate\Database\Eloquent\Relations\HasOne
     */
    public function profile(): HasOne
    {
        return $this->hasOne(Profiles::class, 'id_users', 'id');
    }

}
