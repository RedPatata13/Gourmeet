<?php

namespace App\Models;

use DateTimeInterface;
use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Laravel\Sanctum\HasApiTokens;
use Illuminate\Database\Eloquent\Model;

class User extends Authenticatable
{
    /** @use HasFactory<\Database\Factories\UserFactory> */
    use HasFactory, Notifiable, HasApiTokens;

    /**
     * The attributes that are mass assignable.
     *
     * @var list<string>
     */
    protected $fillable = [
        'name',
        'username',
        'email',
        'password',
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

    public function posts(){
        // return $this->hasMany(Post::class);
        return $this->hasMany(Recipe::class);
    }

    public function comments(){
        return $this->hasMany(Comment::class);
    }

    public function reactions(){
        return $this->hasMany(Reaction::class);
    }

    public function favorites(){
        return $this->belongsToMany(Recipe::class, 'favorites')->withTimestamps();
    }

    public function createToken(string $name, array $abilities = ['*'], ?DateTimeInterface $expiresAt = null)
    {
        $token = $this->createToken($name, $abilities, $expiresAt);
        return $token;
    }
}
