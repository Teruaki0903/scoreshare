<!-- 
<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <title>Blog</title>
    <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">
</head>
<body>
    <h1>Blog Name</h1>
    <a href='/posts/create'>create</a>
    <div class='posts'>
        @foreach ($posts as $post)
            <div class='post'>
                <h2 class='title'>
                    <a href="/posts/{{ $post->id }}">{{ $post->title }}</a>
                </h2>
                <small>{{ $post->user->name }}</small>
                <p class='body'>{{ $post->body }}</p>
                <form action="/posts/{{ $post->id }}" id="form_{{ $post->id }}" method="post">
                    @csrf
                    @method('DELETE')
                    <button type="button" onclick="deletePost({{ $post->id }})">delete</button> 
                </form>
            </div>
            <a href="/categories/{{ $post->category->id }}">{{ $post->category->name }}</a>
        @endforeach
    </div>
    <div class='paginate'>
        {{ $posts->links() }}
    </div>
    <script>
        function deletePost(id) {
            'use strict'

            if (confirm('削除すると復元できません。\n本当に削除しますか？')) {
                document.getElementById(form_${id}).submit();
            }
        }
    </script>
</body>
</html>
-->
<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <title>Blog</title>
    <!-- Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">
    <style>
        body {
            font-family: 'Nunito', sans-serif;
            background-color: #f8f9fa;
            margin: 0;
            padding: 20px;
        }

        a {
            text-decoration: none;
            color: #007bff;
            transition: color 0.3s;
        }

        a:hover {
            color: #0056b3;
        }

        .posts {
            max-width: 800px;
            margin: auto;
            padding: 0;
        }

        .post {
            background: #ffffff;
            border: 1px solid #dee2e6;
            border-radius: 10px;
            margin-bottom: 20px;
            padding: 20px;
            box-shadow: 0 2px 5px rgba(0, 0, 0, 0.1);
            transition: box-shadow 0.3s;
        }

        .post:hover {
            box-shadow: 0 4px 15px rgba(0, 0, 0, 0.2);
        }

        .title {
            font-size: 1.5rem;
            color: #343a40;
            margin: 0 0 10px;
        }

        small {
            display: block;
            margin-bottom: 10px;
            color: #6c757d;
        }

        .body {
            font-size: 1rem;
            color: #495057;
            line-height: 1.5;
        }

        .paginate {
            text-align: center;
            margin: 20px 0;
        }

        button {
            background-color: #dc3545;
            border: none;
            color: white;
            padding: 10px 15px;
            border-radius: 5px;
            cursor: pointer;
            font-size: 1rem;
            transition: background-color 0.3s;
        }

        button:hover {
            background-color: #c82333;
        }
    </style>
</head>
<body>
    <a href='/posts/create'>Create Post</a>
    <div class='posts'>
        @foreach ($posts as $post)
            <div class='post'>
                <h2 class='title'>
                    <a href="/posts/{{ $post->id }}">{{ $post->title }}</a>
                </h2>
                <small>Posted by {{ $post->user->name }}</small>
                <p class='body'>{{ $post->body }}</p>
                <form action="/posts/{{ $post->id }}" id="form_{{ $post->id }}" method="post">
                    @csrf
                    @method('DELETE')
                    <button type="button" onclick="deletePost({{ $post->id }})">Delete</button> 
                </form>
            </div>
            <a href="/categories/{{ $post->category->id }}">{{ $post->category->name }}</a>
        @endforeach
    </div>
    <div class='paginate'>
        {{ $posts->links() }}
    </div>
    <script>
        function deletePost(id) {
            'use strict'

            if (confirm('削除すると復元できません。\n本当に削除しますか？')) {
                document.getElementById(form_${id}).submit();
            }
        }
    </script>
</body>
</html>