<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class BestFriend extends Model
{
    use HasFactory;

    protected $table = 'best_friends';

    protected $fillable = [
        'user_id',
        'best_friend_id',
    ];

    public function user()
    {
        return $this->belongsTo(User::class, 'user_id');
    }

    public function bestFriend()
    {
        return $this->belongsTo(User::class, 'best_friend_id');
    }

}
