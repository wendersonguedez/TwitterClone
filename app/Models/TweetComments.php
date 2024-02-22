<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class TweetComments extends Model
{
    use HasFactory;

    protected $fillable = [
        'content',
        'user_id',
        'tweet_id'
    ];

    protected $table = 'tweets_comments';
    
    public function tweet(): BelongsTo
    {
        return $this->belongsTo(Tweet::class);
    }

    /**
     * Método para retornar os dados de qual usuário pertence o comentário.
     * @return BelongsTo
     */
    public function user()
    {
        return $this->belongsTo(User::class);
    }
}
