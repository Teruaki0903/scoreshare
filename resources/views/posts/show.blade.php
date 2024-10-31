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
            padding: 20px;
        }

        h1.title {
            color: #333;
            text-align: center;
            margin-bottom: 20px;
        }

        .content {
            background-color: #fff;
            border-radius: 8px;
            box-shadow: 0 2px 10px rgba(0, 0, 0, 0.1);
            padding: 20px;
            margin-bottom: 20px;
        }

        .content__post {
            margin-bottom: 20px;
        }

        img {
            max-width: 100%;
            height: auto;
            border-radius: 5px;
            margin: 10px 0;
        }

        small {
            display: block;
            margin: 10px 0;
            color: #777;
        }

        strong {
            color: #333;
        }

        button {
            background-color: #3490dc;
            color: #fff;
            border: none;
            border-radius: 5px;
            padding: 10px 15px;
            cursor: pointer;
            font-size: 16px;
            margin-top: 10px;
            transition: background-color 0.3s;
        }

        button:hover {
            background-color: #2779bd;
        }

        form {
            margin-top: 20px;
        }

        .footer {
            margin-top: 20px;
            text-align: center;
        }

        .edit {
            margin-top: 10px;
            text-align: right;
        }

        h2 {
            margin-top: 30px;
            color: #333;
        }

        textarea {
            width: 100%;
            height: 100px;
            border: 1px solid #ccc;
            border-radius: 5px;
            padding: 10px;
            margin-top: 10px;
            resize: none;
        }

        li {
            list-style: none;
            background: #f0f0f0;
            padding: 10px;
            border-radius: 5px;
            margin-bottom: 10px;
        }
    </style>
</head>
<body>
    <h1 class="title">
        {{ $post->title }}
    </h1>
    <div class="content">
        <div class="content__post">
            <p>{{ $post->body }}</p>    
        </div>
        <small>{{ $post->user->name }}</small>
        <div>
            <img src="{{ $post->image_url }}" alt="画像が読み込めません。">
        </div>
        <div>
            <strong>Good!:</strong> {{ $post->high_rating ?? 0 }}
        </div>

        <form action="{{ route('posts.increaseRating', ['post' => $post->id]) }}" method="POST">
            @csrf
            <button type="submit">good</button>
        </form>
    </div>
    <a href="/categories/{{ $post->category->id }}">{{ $post->category->name }}</a>
    <h2>New Category</h2>
    <form action="{{ route('categories.store') }}" method="POST">
        @csrf
        <input type="text" name="name" placeholder="Category Name" required>
        <button type="submit">Add Category</button>
    </form>
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
