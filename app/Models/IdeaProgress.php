<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class IdeaProgress extends Model
{
    use HasFactory;

    protected $table = 'idea_progress';

    protected $fillable = [
        'idea_id',
        'milestone',
        'description',
        'attachments',
        'target_date',
        'completed_date',
        'status',
    ];

    protected $casts = [
        'attachments' => 'array',
        'target_date' => 'date',
        'completed_date' => 'date',
    ];

    public function idea()
    {
        return $this->belongsTo(Idea::class);
    }
}
