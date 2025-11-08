<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Recipe extends Model
{
    use HasFactory;

    protected $fillable = [
        'user_id',
        'title',
        'body',
        'ingredients',
        'cover_image',
        'prep_time',
        'cook_time',
        'servings',
        'views',
        'rating',
        'comment_count',
        'reaction_count',
    ];

    protected $casts = [
        'ingredients' => 'array',
    ];

    public function user()
    {
        return $this->belongsTo(User::class);
    }

    public function comments()
    {
        return $this->hasMany(Comment::class);
    }

    public function reactions()
    {
        return $this->morphMany(Reaction::class, 'reactable');
    }

    public function favorites()
    {
        return $this->belongsToMany(User::class, 'favorites')->withTimestamps();
    }


    public function getTotalTimeAttribute()
    {
        return ($this->prep_time ?? 0) + ($this->cook_time ?? 0);
    }
}
