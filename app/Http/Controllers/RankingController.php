<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Post;
use App\Models\Rank; // 修正: モデル名を修正
use App\Models\RankScore; // モデルを追加
use App\Models\Coments;
use App\Http\Requests\PostRequest; 
use Cloudinary;
use App\Models\Category;
use Illuminate\Support\Facades\DB;

class RankingController extends Controller
{
    public function index()
    {
        // rankingsテーブルから全てのデータを取得
        $rankings = Rank::all();

        // ビューにデータを渡す
        return view('ranks.index')->with(['rankings' => $rankings]);
    }
     public function show($name)
    {
        // 名前に基づいてランキングを取得
        $ranking = Rank::where('name', $name)->first();

        if (!$ranking) {
            abort(404, 'Ranking not found');
        }

        // 該当のランキングに関連するスコアを取得
        $scores = RankScore::where('rankings_id', $ranking->id)->get();

        // ビューにデータを渡す
        return view('ranks.show')->with(['ranking' => $ranking, 'scores' => $scores]);
    }
}