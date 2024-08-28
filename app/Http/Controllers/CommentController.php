<?php
namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Coments;
use App\Models\Post;

class CommentController extends Controller
{
    public function store(Request $request, Post $post)
    {
        $request->validate([
            'body' => 'required|string|max:200',
        ]);

        // コメントを保存
        Coments::create([
            'post_id' => $post->id,
            'user_id' => auth()->id(), // ログインユーザーのIDを使用
            'body' => $request->input('body'),
        ]);

        // 投稿詳細ページにリダイレクト
    return redirect()->route('posts.show', ['post' => $post->id])
                     ->with('success', 'Comment added successfully!');
    }
}
