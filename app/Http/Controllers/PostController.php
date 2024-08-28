<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Post;
use App\Models\Coments;
use App\Http\Requests\PostRequest; // useする
use Cloudinary;
use App\Models\Category;

class PostController extends Controller
{
    public function index(Post $post)
    {
        return view('posts.index')->with(['posts' => $post->getPaginateByLimit()]);
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
        $comments = $post->comments; // post_id で自動的にフィルタリングされる
        return view('posts.show')->with(['post' => $post, 'comments' => $comments]);
    }
    public function create(Category $category)
    {
        return view('posts.create')->with(['categories' => $category->get()]);
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