<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Respondent extends Model
{
    use HasFactory;

    protected $table = 'respondents';
    protected $primaryKey = 'id';
    protected $fillable = ['name', 'email'];
}
