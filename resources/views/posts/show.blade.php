<!DOCTYPE HTML>
<html lang="ja">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Posts</title>
    <!-- Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">
    <style>
    body {
    font-family: 'Nunito', sans-serif;
    background-color: #f7f7f7;
    margin: 0;
    padding: 10px; /* 全体のパディングを少し減らす */
}

h1.title {
    color: #333;
    text-align: left;
    font-size: 0.8em;
    margin-bottom: 0px; /* タイトルの下のマージンを狭める */
}

.content {
    background-color: #fff;
    border-radius: 8px;
    box-shadow: 0 2px 10px rgba(0, 0, 0, 0.1);
    padding: 15px; /* 全体のパディングを狭める */
    margin-top: 0;    /* 上マージンを0に */
    margin-bottom: 0px; /* 下のマージンを少し狭める */
    font-size: 1.5em;
    line-height: 1.5; /* 行間を少し狭める */
}

.content__post {
    font-size: 0.7em;
    margin-bottom: 0px; /* 本文の下のマージンを少し狭める */
    color: #444;
}

.username {
    display: block;
    font-size: 0.7em;
    margin-bottom: 2px; /* ユーザー名の下のマージンを狭める */
    color: #777;
}

.rating-category {
    display: flex;
    align-items: center;
    justify-content: space-between;
    margin-bottom: 2px; /* 下のマージンを少し狭める */
}

.rating-button {
    background-color: #3490dc;
    color: white;
    border: none;
    border-radius: 5px;
    padding: 8px 12px; /* ボタンのパディングを少し狭める */
    font-size: 1em;
    cursor: pointer;
    transition: background-color 0.3s, transform 0.2s;
}

.rating-button:hover {
    background-color: #2779bd;
    transform: scale(1.05);
}

.category-link {
    color: #3490dc;
    text-decoration: none;
    margin-left: 10px; /* ボタンとの間隔を少し狭める */
}

.category-link:hover {
    text-decoration: underline;
}

img {
    max-width: 70%;
    height: auto;
    border-radius: 5px;
    margin: 5px auto; /* 上下のマージンを5pxに */
    display: block;
}

small {
    display: block;
    margin: 0px 0; /* 上下のマージンを狭める */
    color: #777;
}

button {
    background-color: #3490dc;
    color: #fff;
    border: none;
    border-radius: 5px;
    padding: 8px 12px; /* ボタンのパディングを少し狭める */
    cursor: pointer;
    font-size: 16px;
    margin-top: 2px; /* 上のマージンを少し狭める */
    transition: background-color 0.3s;
}

button:hover {
    background-color: #2779bd;
}

form {
    margin-top: 2px; /* 上のマージンを少し狭める */
}

.footer {
    margin-top: 2px; /* 上のマージンを少し狭める */
    text-align: left;
}

.edit {
    margin-top: 2px; /* 上のマージンを少し狭める */
    text-align: right;
}

h2 {
    margin-top: 2px; /* 上のマージンを少し狭める */
    color: #333;
}

textarea {
    width: 100%;
    height: 100px;
    border: 1px solid #ccc;
    border-radius: 5px;
    padding: 8px; /* パディングを少し狭める */
    margin-top: 8px; /* 上のマージンを少し狭める */
    resize: none;
}

li {
    list-style: none;
    background: #f0f0f0;
    padding: 8px; /* パディングを少し狭める */
    border-radius: 5px;
    margin-bottom: 8px; /* 下のマージンを少し狭める */
}

.rating {
    display: flex;
    align-items: center;
    margin-top: 2px; /* 上のマージンを少し狭める */
}

.rating-count {
    font-size: 1.5em;
    margin-left: 5px; /* 左のマージンを少し狭める */
    color: #3490dc;
}

.rating-form {
    margin-left: 10px; /* 高評価数との間隔を少し狭める */
}

.rating-button:active {
    transform: scale(0.95);
}

    </style>
</head>
<body>
    <div class="footer">
            <a href="/">home</a>
        </div>
    
    <div class="content">
        
    <div>
        <img src="{{ $post->image_url }}" alt="画像が読み込めません。" class="post-image">
    </div>
    <h1 class="title">{{ $post->title }}</h1>
    
    <a href="/categories/{{ $post->category->id }}" class="category-link">{{ $post->category->name }}</a>
    <div class="content__post">
        <p>{{ $post->body }}</p>    
    </div>
    <div class="rating-category">
        <small class="username">{{ $post->user->name }}</small>
        <form action="{{ route('posts.increaseRating', ['post' => $post->id]) }}" method="POST" class="rating-form">
            @csrf
            <button type="submit" class="rating-button">👍 {{ $post->high_rating ?? 0 }}</button>
        </form>
    </div>
    
</div>
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
