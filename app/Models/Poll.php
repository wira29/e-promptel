<?php

namespace App\Models;

use App\Base\Interfaces\HasQuestions;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Poll extends Model implements HasQuestions
{
    use HasFactory;

    protected $table = 'polls';
    protected $primaryKey = 'id';
    protected $fillable = ['title', 'start', 'end', 'description'];

    protected $dates = ['start', 'end'];

    /**
     * One-to-Many relationship with Questions Model
     *
     * @return HasMany
     */
    public function questions(): HasMany
    {
        return $this->hasMany(Question::class);
    }
}
