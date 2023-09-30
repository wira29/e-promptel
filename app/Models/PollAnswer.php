<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class PollAnswer extends Model
{
    use HasFactory;

    protected $table = 'poll_answers';
    protected $primaryKey = 'id';
    protected $fillable = ['answer', 'date', 'question_id', 'respondent_id'];

    /**
     * many to one relationship with question
     *
     * @return BelongsTo
     */
    public function question(): BelongsTo
    {
        return $this->belongsTo(Question::class);
    }

    /**
     * many to one relationship with respondent
     *
     * @return BelongsTo
     */
    public function respondent(): BelongsTo
    {
        return $this->belongsTo(Respondent::class);
    }
}
