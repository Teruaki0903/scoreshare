<!DOCTYPE HTML>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <title>Blog</title>
    </head>
    <body>
        <x-app-layout>
            <div class="own_posts">
                @foreach($own_posts as $post)
                    <div>
                        <h4><a href="/posts/{{ $post->id }}">{{ $post->title }}</a></h4>
                        <small>{{ $post->user->name }}</small>
                        <p>{{ $post->body }}</p>
                    </div>
                @endforeach
                <div class='paginate'>
                    {{ $own_posts->links() }}
                </div>
            </div>
        </x-app-layout>
    </body>
</html>