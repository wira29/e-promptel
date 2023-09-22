<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Question extends Model
{
    use HasFactory;

    protected $table = 'questions';
    protected $primaryKey = 'id';
    protected $fillable = ['name', 'poll_id'];

    /**
     * many to one relationship with Poll
     *
     * @return BelongsTo
     */
    public function poll(): BelongsTo
    {
        return $this->belongsTo(Poll::class);
    }

    /**
     * one to many relations with pollAnswer
     *
     * @return HasMany
     */
    public function pollAnswers(): HasMany
    {
        return $this->hasMany(PollAnswer::class);
    }
}
