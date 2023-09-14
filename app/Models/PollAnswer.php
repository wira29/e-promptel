<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class PollAnswer extends Model
{
    use HasFactory;

    protected $table = 'poll_answers';
    protected $primaryKey = 'id';
    protected $fillable = ['answer', 'date', 'question_id', 'respondent_id'];
}
