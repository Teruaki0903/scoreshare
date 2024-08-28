<!DOCTYPE HTML>
<html lang="ja">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Posts</title>
        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">
    </head>
    <body>
        <h1 class="title">
            {{ $post->title }}
        </h1>
        <div class="content">
            <div class="content__post">
                <h3>本文</h3>
                <p>{{ $post->body }}</p>    
            </div>
            <small>{{ $post->user->name }}</small>
            <div>
                <img src="{{ $post->image_url }}" alt="画像が読み込めません。">
            </div>
        </div>
        <a href="/categories/{{ $post->category->id }}">{{ $post->category->name }}</a>
        <div class="footer">
            <a href="/">戻る</a>
        </div>
        <div class="edit"><a href="/posts/{{ $post->id }}/edit">edit</a></div>
        <h2>Comments</h2>
        <!-- コメント投稿フォーム -->
        <form action="{{ route('comments.store', ['post' => $post->id]) }}" method="POST">
        @csrf
        <textarea name="body" placeholder="Write your comment here..." required></textarea>
            <button type="submit">Submit Comment</button>
        </form>
         @foreach($comments as $comment)
            <li>{{ $comment->body }} - {{ $comment->user ? $comment->user->name : 'Anonymous' }}</li>
        @endforeach
    </body>
</html>