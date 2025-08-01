<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Idea extends Model
{
    use HasFactory;

    protected $fillable = [
        'user_id',
        'title',
        'description',
        'category',
        'stage',
        'team_members',
        'thumbnail',
        'attachments',
        'status',
        'views',
        'likes',
        'is_featured',
    ];

    protected $casts = [
        'team_members' => 'array',
        'attachments' => 'array',
    ];

    public function user()
    {
        return $this->belongsTo(User::class);
    }

    public function progress()
    {
        return $this->hasMany(IdeaProgress::class);
    }

    public function category()
    {
        return $this->belongsTo(Category::class, 'category', 'slug');
    }
}
