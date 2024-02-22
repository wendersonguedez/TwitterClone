<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class TweetStatistics extends Model
{
    use HasFactory;

    protected $fillable = [
        'likes',
        'views',
    ];
}
