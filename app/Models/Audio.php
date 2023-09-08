<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Audio extends Model
{
    use HasFactory;

    protected $table = 'audio';
    protected $primaryKey = 'id';
    protected $fillable = ['date', 'title', 'content', 'link', 'slug', 'user_id'];

}
