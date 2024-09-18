<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Score extends Model
{
    use HasFactory;
    
    public function getByLimit(int $limit_count = 10)
    {
        // updated_atで降順に並べたあと、limitで件数制限をかける
        return $this->orderBy('score', 'DESC')->limit($limit_count)->get();
    }

    
    protected $fillable = [
        'id',
        'post_id',
        'user_id',
        'body',
    ];
    public function user()
    {
        return $this->belongsTo(User::class);
    }
    
}
