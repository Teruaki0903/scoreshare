<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Rank extends Model
{
    use HasFactory;

    // テーブル名を明示的に指定
    protected $table = 'rankings';

    protected $fillable = [
        'id',
    ];

    public function getByLimit(int $limit_count = 10)
    {
        return $this->orderBy('updated_at', 'DESC')->limit($limit_count)->get();
    }

    public function user()
    {
        return $this->belongsTo(User::class);
    }
}

