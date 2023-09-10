<?php

namespace App\Models;

// use App\Base\Interfaces\HasCategory;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Article extends Model
{
    use HasFactory;

    protected $table = 'articles';
    protected $primaryKey = 'id';
    protected $fillable = ['title', 'date', 'content', 'thumbnail', 'status', 'slug', 'user_id', 'category_id'];

    /**
     * One-to-Many relationship with Category Model
     *
     * @return BelongsTo
     */
    public function category(): BelongsTo
    {
        return $this->belongsTo(Category::class);
    }
}
