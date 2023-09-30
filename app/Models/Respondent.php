<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Respondent extends Model
{
    use HasFactory;

    protected $table = 'respondents';
    protected $primaryKey = 'id';
    protected $fillable = ['name', 'email'];

    /**
     * one to many relationship with poll answer
     *
     * @return HasMany
     */
    public function pollAnswers(): HasMany
    {
        return $this->hasMany(PollAnswer::class);
    }
}
