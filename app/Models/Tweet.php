<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Database\Eloquent\SoftDeletes;

class Tweet extends Model
{
    use HasFactory, SoftDeletes;

    protected $fillable = [
        'content',
        'likes'
    ];

    /*
     * Indica quais campos não podem ser preenchido em massa, ou seja, o contrário do $fillable.
     * Caso o campo 'like' estivesse dentro do array, ele não seria preenchido, em caso de inserção de dados.
    protected $guarded = [];
    */

    public function comments(): HasMany
    {
        return $this->hasMany(TweetComments::class);
    }


}
