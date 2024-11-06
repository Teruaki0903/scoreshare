<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Blog</title>
    <!-- Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">
    <style>
       body {
            font-family: 'Nunito', sans-serif;
            background-color: #121212;
            color: #ffffff;
            margin: 0;
            padding: 10px;
        }

        .header {
            background-color: #1e1e1e;
            padding: 15px;
            border-radius: 8px;
            margin-bottom: 15px;
            display: flex;
            /*justify-content: flex-start;*/
            justify-content: space-between; /* 左右に配置 */
            align-items: center;
        }
        
        .header h1 {
            margin: 0;
            color: #ffffff;
            font-size: 2em;
            flex-grow: 1;
        }

        .header a {
            color: #90caf9;
            text-decoration: none;
            font-size: 2em;
            margin-left: 20px;
        }

        .header a:hover {
            text-decoration: underline;
        }
        
        
        .header .create-link {
            margin-left: auto; /* 右端に配置 */
        }

        .posts {
            display: flex;
            flex-wrap: wrap;
            gap: 20px;
            max-width: 100%;
            margin: auto;
            padding: 10px;
        }

        .post {
            background: #1e1e1e;
            border: 1px solid #2a2a2a;
            border-radius: 10px;
            padding: 10px; /* Reduced padding */
            box-shadow: 0 2px 10px rgba(0, 0, 0, 0.5);
            position: relative;
            width: 300px;
            height: 300px;
            display: flex;
            flex-direction: column;
            justify-content: space-between;
            gap: 5px; /* Reduced gap */
        }

        .post:hover {
            box-shadow: 0 4px 15px rgba(0, 0, 0, 0.7);
        }
        
        .image-container {
            flex: 2;
            display: flex;
            height: auto;
            width: auto;
            aspect-ratio: 1 / 1; /* Maintain width based on the height for a square shape */
            overflow: hidden;
        }


        .post-image {
            margin: 0 auto;
            height: auto;
            width: auto;
            max-width: 90%; /* Adjusted to better fit within the container */
            max-height: 60%;
            border-radius: 5px;
        }



        .title {
            margin-top: -120px; /* Reduced margin */
            font-size: 2.2em;
            font-weight: bold;
            color: #ffffff !important;
            margin-bottom: 1px; /* Reduced margin */
        }
        
        .category-link {
            color: #90caf9;
            text-decoration: none;
        }

        .category-link:hover {
            text-decoration: underline;
        }



        .body {
            font-size: 2.2em;
            color: #b0b0b0;
            margin-top: 15px;
            margin-bottom: 20px;
        }

        
        .username {
            display: block;
            font-size: 1.2em;
            font-weight: bold;
            color: #999;
            margin-bottom: 5px;
        }

        .rating-button {
            background-color: #1e88e5;
            color: white;
            border: none;
            border-radius: 5px;
            padding: 10px 14px;
            font-size: 1.2em;
            cursor: pointer;
            transition: background-color 0.3s, transform 0.2s;
            box-sizing: border-box;
        }

        .rating-button:hover {
            background-color: #1565c0;
            transform: scale(1.05);
        }

        .comments-section {
            margin-top: 20px;
            padding: 20px;
            background-color: #1e1e1e;
            border-radius: 8px;
            box-shadow: 0 2px 10px rgba(0, 0, 0, 0.5);
        }

        textarea {
            width: 100%;
            height: 100px;
            border: 1px solid #555;
            border-radius: 5px;
            background-color: #333;
            color: #e0e0e0;
            padding: 8px;
            margin-top: 8px;
            resize: none;
            box-sizing: border-box;
        }

        button {
            background-color: #1e88e5;
            color: #fff;
            border: none;
            border-radius: 5px;
            padding: 8px 12px;
            cursor: pointer;
            font-size: 16px;
            margin-top: 5px;
            transition: background-color 0.3s;
        }

        button:hover {
            background-color: #1565c0;
        }

        li {
            list-style: none;
            background: #2c2c2c;
            padding: 8px;
            border-radius: 5px;
            margin-bottom: 8px;
            color: #e0e0e0;
        }
    </style>
</head>
<body>
    <div class="header">
        <a href="/">ScoreShare</a>
        <a href="/posts/create" class="create-link">create</a> <!-- 右端に配置 -->
        <a href="/dashboard" class="mypage-link">{{ Auth::user()->name }}</a>
        
    </div>

    <div class='posts'>
        @foreach ($posts as $post)
            <div class='post'>
                <a href="/posts/{{ $post->id }}" style="text-decoration: none; color: inherit;">
                    <div class="image-container">
                        <img src="{{ $post->image_url }}" alt="画像が読み込めません。" class="post-image">
                    </div>
                    <h2 class='title'>
                        {{ $post->title }}
                    </h2>
                    <a href="/categories/{{ $post->category->id }}" class="category-link">{{ $post->category->name }}</a>
                    <div class='rating-category' style='display: flex; align-items: center; gap: 10px;'>
                        <a href="/other_user/{{$post->id}}" class="username">{{ $post->user->name }}</a>
                    </div>
                </a>
            </div>
        @endforeach
    </div>

    <div class="pagination">
        {{ $posts->links() }}
    </div>
</body>
</html>
