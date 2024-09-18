<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class RankScore extends Model
{
    use HasFactory;

    protected $fillable = [
        'id',
        'rankings_id',
        'user_id',
        'score',
    ];

    // リレーション定義: 各スコアは1人のユーザーに属する
    public function user()
    {
        return $this->belongsTo(User::class);
    }

    // リレーション定義: 各スコアは1つのランキングに属する
    public function ranking()
    {
        return $this->belongsTo(Rank::class, 'rankings_id');
    }
}

