<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Post;
use App\Models\RankScore; // モデルを追加
use App\Models\Coments;
use App\Http\Requests\PostRequest; // useする
use Cloudinary;
use App\Models\Category;
use Illuminate\Support\Facades\DB;

class PostController extends Controller
{
    public function index(Post $post)
    {
        return view('posts.index')->with(['posts' => $post->getPaginateByLimit()]);
    }
    
    public function user_index(Post $post)
    {
        $user_id = $post->user_id; // 指定されたpostのuser_idを取得
        $posts = Post::where('user_id', $user_id)->paginate(10); // user_idが一致する投稿のみ取得

        return view('posts.userindex')->with(['posts' => $posts]);
    }
    public function show(Post $post)
    {
        //return view('posts.show')->with(['post' => $post]);
     //'post'はbladeファイルで使う変数。中身は$postはid=1のPostインスタンス。
        // Postに関連するコメントも一緒に渡す
        //return view('posts.show')->with(['post' => $post, 'comments' => $post->comments]);
        //$comments = $post->comments()->where('post_id', $post->id)->get();
        //return view('posts.show')->with(['post' => $post, 'comments' => $comments]);
         // Postに関連するコメントを取得
        //dd($post); // デバッグ用
        $comments = $post->comments; // post_id で自動的にフィルタリングされる
        return view('posts.show')->with(['post' => $post, 'comments' => $comments]);
    }
    public function create(Category $category)
    {
        $categories = $category->all();
        #dd($categories); // カテゴリーの内容を表示
        return view('posts.create')->with(['categories' => $categories]);
    }



    
    public function increaseRating(Post $post)
    {
        // high_rating を1増加させる
        //$post->increment('high_rating');
        
        // high_rating を1増加させる
        /*DB::table('posts')
            ->where('id', $post->id)
            ->increment('high_rating');
        */
        DB::table('posts')
        ->where('id', $post->id)
        ->update([
            'high_rating' => $post->high_rating + 1,
            'updated_at' => now(), // 更新日時を変更する
        ]);

        // 投稿詳細ページにリダイレクト
        //return redirect()->route('posts.show', $post->id)->with('success', 'Rating increased!');
        return redirect()->route('posts.show', ['post' => $post->id])->with('success', 'Rating increased!');

    }
    
    public function store(Request $request, Post $post)
    {
        $input = $request['post'];
        $image_url = Cloudinary::upload($request->file('image')->getRealPath())->getSecurePath();
        $input += ['image_url' => $image_url];  //追加
        $input += ['user_id' => $request->user()->id];    //この行を追加
        $post->fill($input)->save();
        return redirect('/posts/' . $post->id);
    }
    
    public function edit(Post $post)
    {
        return view('posts.edit')->with(['post' => $post]);
    }
    public function update(PostRequest $request, Post $post)
    {
        $input_post = $request['post'];
        //$input_post += ['user_id' => $request->user()->id];    //この行を追加
        $post->fill($input_post)->save();

        return redirect('/posts/' . $post->id);
    }
    
    
    public function delete(Post $post)
    {
        $post->delete();
        return redirect('/');
    }
}
?>