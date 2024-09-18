<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <title>Blog</title>
        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">
    </head>
    <body>
        <div class='posts'>
            @foreach ($rankings as $ranking)
                <div class='post'>
                    <h2 class='title'>
                        <a href="/ranking/{{ $ranking->id }}">Ranking ID: {{ $ranking->id }}</a> <!-- リンクの中にIDを表示 -->
                    </h2>
                </div>
            @endforeach
        </div>
    </body>
</html>
