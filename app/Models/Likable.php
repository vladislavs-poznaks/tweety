<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Builder;

trait Likable
{
    public function scopeWithLikes(Builder $query)
    {
        $query->leftJoinSub(
            'SELECT tweet_id, sum(liked) likes, sum(!liked) dislikes FROM likes GROUP BY tweet_id',
            'likes',
            'likes.tweet_id',
            'tweets.id'
        );
    }

    public function like($user = null)
    {
        $this->likes()->updateOrCreate([
            'user_id' => $user ? $user->id : auth()->user()->id
        ], [
            'liked' => true
        ]);
    }

    public function dislike($user = null)
    {
        $this->likes()->updateOrCreate([
            'user_id' => $user ? $user->id : auth()->user()->id
        ], [
            'liked' => false
        ]);
    }

    public function isLikedBy(User $user)
    {
        return $user->likes->where('tweet_id', $this->id)->where('liked', true)->isNotEmpty();
    }

    public function isDislikedBy(User $user)
    {
        return $user->likes->where('tweet_id', $this->id)->where('liked', false)->isNotEmpty();
    }

    public function likes()
    {
        return $this->hasMany(Like::class);
    }
}
