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
        background-color: #121212;
        color: #e0e0e0;
        margin: 0;
        padding: 10px;
    }

    .header {
        background-color: #1e1e1e;
        padding: 15px;
        border-radius: 8px;
        margin-bottom: 15px;
        display: flex;
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
        margin-left: 20px;
        font-size: 2em;
    }

    .header a:hover {
        text-decoration: underline;
    }
    
    .header .create-link {
        margin-left: auto; /* 右端に配置 */
    }

    .main-container {
        display: flex;
        gap: 15px;
    }

    .image-container {
        flex: 2;
        display: flex;
        justify-content: center;
    }

    .post-image {
        height: auto;
        max-height: 80vh;
        width: auto;
        max-width: 100%;
        border-radius: 5px;
    }

    .content {
        flex: 1;
        background-color: #1e1e1e;
        border-radius: 8px;
        box-shadow: 0 2px 10px rgba(0, 0, 0, 0.5);
        padding: 15px;
        max-height: 80vh;
        position: relative; /* 相対配置で .rating-category を固定 */
        overflow: visible; /* スクロールを防ぐ */
        margin-right: 20px;
    }

    .title {
        color: #ffffff;
        font-size: 2em;
        font-weight: bold;
        margin-bottom: 5px;
    }

    .category-link {
        color: #90caf9;
        text-decoration: none;
    }

    .category-link:hover {
        text-decoration: underline;
    }

    .content__post {
        font-size: 1.2em;
        font-weight: bold;
        color: #b0b0b0;
        margin-top: 15px;
        margin-bottom: 10px;
    }

    .username {
        display: block;
        font-size: 3.2em;
        font-weight: bold;
        color: #999;
        margin-bottom: 5px;
    }

    .rating-category {
        display: flex;
        align-items: center;
        justify-content: space-between;
        position: absolute; /* 親要素内で絶対配置 */
        bottom: 0; /* 親要素の下部に固定 */
        width: calc(100% - 25px); /* 親要素の幅から余白を引く */
        margin-right: 50px; /* 右側にスペースを指定 */
    }

    .rating-button {
        background-color: #1e88e5;
        color: white;
        border: none;
        border-radius: 5px;
        padding: 8px 12px;
        font-size: 1em;
        cursor: pointer;
        transition: background-color 0.3s, transform 0.2s;
        max-width: 100%; /* 親要素の幅を超えないようにする */
        box-sizing: border-box; /* パディングを含めて幅を計算 */
    }

    .rating-button:hover {
        background-color: #1565c0;
        transform: scale(1.05);
    }

    .comments-section {
        margin-right: 20px;
        margin-left: 20px;
        margin-top: 20px;
        max-width: 100%; /* 親要素の幅を超えないように設定 */
        overflow-x: hidden; /* 横のオーバーフローを防ぐ */
        box-sizing: border-box; /* パディングを含めた幅を計算 */
    }


    h2 {
        color: #ffffff;
        margin-bottom: 10px;
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
        max-width: 100%; /* 親要素の幅を超えないように設定 */
        box-sizing: border-box; /* パディングとボーダーを含めた幅を計算 */
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
        <a href="/posts/create" class="create-link" >create</a> <!-- 右端に配置 -->
        <!-- ログアウトフォーム -->
        <form method="POST" action="{{ route('logout') }}" style="display: inline;">
            @csrf
            <button type="submit" class="create-link" style="background: none; border: none; color: #90caf9; font-size: 2em; margin-left: 20px;">
                logout
            </button>
        </form>
        <a href="/profile">profile</a> <!-- 右端に配置 -->
    </div>
    
    <div class="main-container">
        
        <div class="content">
            <h1 class="title">{{ Auth::user()->name }}</h1> <!-- ユーザー名を表示 -->
            <h1 class="title">{{ Auth::user()->email }}</h1> <!-- ユーザー名を表示 -->
        </div>
    <div>
</body>
</html>
