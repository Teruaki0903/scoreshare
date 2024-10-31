{"filter":false,"title":"show.blade.php","tooltip":"/blog/resources/views/posts/show.blade.php","undoManager":{"mark":80,"position":80,"stack":[[{"start":{"row":0,"column":0},"end":{"row":23,"column":7},"action":"insert","lines":["<!DOCTYPE HTML>","<html lang=\"ja\">","    <head>","        <meta charset=\"utf-8\">","        <meta name=\"viewport\" content=\"width=device-width, initial-scale=1\">","        <title>Posts</title>","        <!-- Fonts -->","        <link href=\"https://fonts.googleapis.com/css?family=Nunito:200,600\" rel=\"stylesheet\">","    </head>","    <body>","        <h1 class=\"title\">","            {{ $post->title }}","        </h1>","        <div class=\"content\">","            <div class=\"content__post\">","                <h3>本文</h3>","                <p>{{ $post->body }}</p>    ","            </div>","        </div>","        <div class=\"footer\">","            <a href=\"/\">戻る</a>","        </div>","    </body>","</html>"],"id":15}],[{"start":{"row":21,"column":14},"end":{"row":22,"column":0},"action":"insert","lines":["",""],"id":16},{"start":{"row":22,"column":0},"end":{"row":22,"column":8},"action":"insert","lines":["        "]}],[{"start":{"row":22,"column":8},"end":{"row":22,"column":78},"action":"insert","lines":["<div class=\"edit\"><a href=\"/posts/{{ $post->id }}/edit\">edit</a></div>"],"id":17}],[{"start":{"row":17,"column":18},"end":{"row":18,"column":0},"action":"insert","lines":["",""],"id":18},{"start":{"row":18,"column":0},"end":{"row":18,"column":12},"action":"insert","lines":["            "]}],[{"start":{"row":18,"column":12},"end":{"row":20,"column":18},"action":"insert","lines":["<div>","                <img src=\"{{ $post->image_url }}\" alt=\"画像が読み込めません。\">","            </div>"],"id":19}],[{"start":{"row":21,"column":14},"end":{"row":22,"column":0},"action":"insert","lines":["",""],"id":20},{"start":{"row":22,"column":0},"end":{"row":22,"column":8},"action":"insert","lines":["        "]}],[{"start":{"row":22,"column":8},"end":{"row":23,"column":0},"action":"insert","lines":["<a href=\"\">{{ $post->category->name }}</a>",""],"id":21}],[{"start":{"row":22,"column":50},"end":{"row":23,"column":0},"action":"remove","lines":["",""],"id":22}],[{"start":{"row":22,"column":8},"end":{"row":22,"column":50},"action":"remove","lines":["<a href=\"\">{{ $post->category->name }}</a>"],"id":23}],[{"start":{"row":22,"column":8},"end":{"row":22,"column":87},"action":"insert","lines":["<a href=\"/categories/{{ $post->category->id }}\">{{ $post->category->name }}</a>"],"id":24}],[{"start":{"row":13,"column":29},"end":{"row":14,"column":12},"action":"insert","lines":["","            "],"id":25}],[{"start":{"row":14,"column":12},"end":{"row":14,"column":50},"action":"insert","lines":["<small>{{ $post->user->name }}</small>"],"id":26}],[{"start":{"row":14,"column":12},"end":{"row":14,"column":50},"action":"remove","lines":["<small>{{ $post->user->name }}</small>"],"id":27},{"start":{"row":14,"column":8},"end":{"row":14,"column":12},"action":"remove","lines":["    "]},{"start":{"row":14,"column":4},"end":{"row":14,"column":8},"action":"remove","lines":["    "]},{"start":{"row":14,"column":0},"end":{"row":14,"column":4},"action":"remove","lines":["    "]}],[{"start":{"row":13,"column":29},"end":{"row":14,"column":0},"action":"remove","lines":["",""],"id":28}],[{"start":{"row":9,"column":10},"end":{"row":10,"column":8},"action":"insert","lines":["","        "],"id":29}],[{"start":{"row":10,"column":8},"end":{"row":10,"column":32},"action":"insert","lines":["{{ Auth::user()->name }}"],"id":30}],[{"start":{"row":9,"column":10},"end":{"row":10,"column":32},"action":"remove","lines":["","        {{ Auth::user()->name }}"],"id":31}],[{"start":{"row":17,"column":18},"end":{"row":18,"column":0},"action":"insert","lines":["",""],"id":32},{"start":{"row":18,"column":0},"end":{"row":18,"column":12},"action":"insert","lines":["            "]}],[{"start":{"row":18,"column":12},"end":{"row":18,"column":50},"action":"insert","lines":["<small>{{ $post->user->name }}</small>"],"id":33}],[{"start":{"row":27,"column":78},"end":{"row":28,"column":0},"action":"insert","lines":["",""],"id":34},{"start":{"row":28,"column":0},"end":{"row":28,"column":8},"action":"insert","lines":["        "]},{"start":{"row":28,"column":8},"end":{"row":29,"column":0},"action":"insert","lines":["",""]},{"start":{"row":29,"column":0},"end":{"row":29,"column":8},"action":"insert","lines":["        "]}],[{"start":{"row":29,"column":8},"end":{"row":35,"column":5},"action":"insert","lines":["","<h2>Comments</h2>","<ul>","    @foreach($comments as $comment)","        <li>{{ $comment->body }} - {{ $comment->user->name }}</li>","    @endforeach","</ul>"],"id":35}],[{"start":{"row":35,"column":0},"end":{"row":35,"column":4},"action":"insert","lines":["    "],"id":36}],[{"start":{"row":35,"column":4},"end":{"row":35,"column":8},"action":"insert","lines":["    "],"id":37}],[{"start":{"row":34,"column":4},"end":{"row":34,"column":8},"action":"insert","lines":["    "],"id":38}],[{"start":{"row":34,"column":8},"end":{"row":34,"column":12},"action":"insert","lines":["    "],"id":39}],[{"start":{"row":33,"column":8},"end":{"row":33,"column":12},"action":"insert","lines":["    "],"id":40}],[{"start":{"row":33,"column":8},"end":{"row":33,"column":12},"action":"insert","lines":["    "],"id":41}],[{"start":{"row":32,"column":4},"end":{"row":32,"column":8},"action":"insert","lines":["    "],"id":42}],[{"start":{"row":32,"column":8},"end":{"row":32,"column":12},"action":"insert","lines":["    "],"id":43}],[{"start":{"row":31,"column":0},"end":{"row":31,"column":4},"action":"insert","lines":["    "],"id":44}],[{"start":{"row":31,"column":4},"end":{"row":31,"column":8},"action":"insert","lines":["    "],"id":45}],[{"start":{"row":30,"column":0},"end":{"row":30,"column":4},"action":"insert","lines":["    "],"id":46}],[{"start":{"row":30,"column":4},"end":{"row":30,"column":8},"action":"insert","lines":["    "],"id":47}],[{"start":{"row":29,"column":4},"end":{"row":29,"column":8},"action":"remove","lines":["    "],"id":48},{"start":{"row":29,"column":0},"end":{"row":29,"column":4},"action":"remove","lines":["    "]},{"start":{"row":28,"column":8},"end":{"row":29,"column":0},"action":"remove","lines":["",""]},{"start":{"row":28,"column":4},"end":{"row":28,"column":8},"action":"remove","lines":["    "]},{"start":{"row":28,"column":0},"end":{"row":28,"column":4},"action":"remove","lines":["    "]},{"start":{"row":27,"column":78},"end":{"row":28,"column":0},"action":"remove","lines":["",""]}],[{"start":{"row":28,"column":25},"end":{"row":29,"column":0},"action":"insert","lines":["",""],"id":49},{"start":{"row":29,"column":0},"end":{"row":29,"column":8},"action":"insert","lines":["        "]}],[{"start":{"row":29,"column":8},"end":{"row":34,"column":7},"action":"insert","lines":["<!-- コメント投稿フォーム -->","<form action=\"{{ route('comments.store', ['post' => $post->id]) }}\" method=\"POST\">","    @csrf","    <textarea name=\"body\" placeholder=\"Write your comment here...\" required></textarea>","    <button type=\"submit\">Submit Comment</button>","</form>"],"id":50}],[{"start":{"row":34,"column":0},"end":{"row":34,"column":4},"action":"insert","lines":["    "],"id":51}],[{"start":{"row":34,"column":4},"end":{"row":34,"column":8},"action":"insert","lines":["    "],"id":52}],[{"start":{"row":33,"column":4},"end":{"row":33,"column":8},"action":"insert","lines":["    "],"id":53}],[{"start":{"row":33,"column":8},"end":{"row":33,"column":12},"action":"insert","lines":["    "],"id":54}],[{"start":{"row":32,"column":4},"end":{"row":32,"column":8},"action":"insert","lines":["    "],"id":55}],[{"start":{"row":31,"column":4},"end":{"row":31,"column":8},"action":"insert","lines":["    "],"id":56}],[{"start":{"row":31,"column":8},"end":{"row":31,"column":12},"action":"insert","lines":["    "],"id":57}],[{"start":{"row":31,"column":8},"end":{"row":31,"column":12},"action":"remove","lines":["    "],"id":58}],[{"start":{"row":30,"column":0},"end":{"row":30,"column":4},"action":"insert","lines":["    "],"id":59}],[{"start":{"row":30,"column":4},"end":{"row":30,"column":8},"action":"insert","lines":["    "],"id":60}],[{"start":{"row":35,"column":8},"end":{"row":39,"column":13},"action":"remove","lines":["<ul>","            @foreach($comments as $comment)","                <li>{{ $comment->body }} - {{ $comment->user->name }}</li>","            @endforeach","        </ul>"],"id":61}],[{"start":{"row":35,"column":8},"end":{"row":37,"column":15},"action":"insert","lines":[" @foreach($comments as $comment)","        <li>{{ $comment->body }} - {{ $comment->user ? $comment->user->name : 'Anonymous' }}</li>","    @endforeach"],"id":62}],[{"start":{"row":37,"column":4},"end":{"row":37,"column":8},"action":"insert","lines":["    "],"id":63}],[{"start":{"row":36,"column":8},"end":{"row":36,"column":12},"action":"insert","lines":["    "],"id":64}],[{"start":{"row":21,"column":18},"end":{"row":22,"column":0},"action":"insert","lines":["",""],"id":65},{"start":{"row":22,"column":0},"end":{"row":22,"column":12},"action":"insert","lines":["            "]}],[{"start":{"row":22,"column":12},"end":{"row":24,"column":18},"action":"insert","lines":["<div>","                <strong>High Rating:</strong> {{ $post->high_rating }}","            </div>"],"id":66}],[{"start":{"row":24,"column":18},"end":{"row":25,"column":0},"action":"insert","lines":["",""],"id":67},{"start":{"row":25,"column":0},"end":{"row":25,"column":12},"action":"insert","lines":["            "]}],[{"start":{"row":25,"column":12},"end":{"row":28,"column":19},"action":"insert","lines":["<form action=\"{{ route('posts.increaseRating', ['post' => $post->id]) }}\" method=\"POST\">","                @csrf","                <button type=\"submit\">Increase Rating</button>","            </form>"],"id":68}],[{"start":{"row":22,"column":12},"end":{"row":24,"column":18},"action":"remove","lines":["<div>","                <strong>High Rating:</strong> {{ $post->high_rating }}","            </div>"],"id":69}],[{"start":{"row":22,"column":12},"end":{"row":25,"column":0},"action":"insert","lines":["<div>","    <strong>High Rating:</strong> {{ $post->high_rating ?? 0 }}","</div>",""],"id":70}],[{"start":{"row":24,"column":0},"end":{"row":24,"column":4},"action":"insert","lines":["    "],"id":71}],[{"start":{"row":24,"column":4},"end":{"row":24,"column":8},"action":"insert","lines":["    "],"id":72}],[{"start":{"row":24,"column":8},"end":{"row":24,"column":12},"action":"insert","lines":["    "],"id":73}],[{"start":{"row":23,"column":0},"end":{"row":23,"column":4},"action":"insert","lines":["    "],"id":74}],[{"start":{"row":23,"column":4},"end":{"row":23,"column":8},"action":"insert","lines":["    "],"id":75}],[{"start":{"row":23,"column":8},"end":{"row":23,"column":12},"action":"insert","lines":["    "],"id":76}],[{"start":{"row":14,"column":39},"end":{"row":15,"column":27},"action":"remove","lines":["","                <h3>本文</h3>"],"id":77}],[{"start":{"row":41,"column":15},"end":{"row":41,"column":16},"action":"insert","lines":["　"],"id":78},{"start":{"row":41,"column":16},"end":{"row":41,"column":17},"action":"insert","lines":["　"]}],[{"start":{"row":41,"column":17},"end":{"row":41,"column":18},"action":"insert","lines":["　"],"id":79}],[{"start":{"row":41,"column":17},"end":{"row":41,"column":18},"action":"remove","lines":["　"],"id":80},{"start":{"row":41,"column":16},"end":{"row":41,"column":17},"action":"remove","lines":["　"]},{"start":{"row":41,"column":15},"end":{"row":41,"column":16},"action":"remove","lines":["　"]}],[{"start":{"row":30,"column":87},"end":{"row":31,"column":0},"action":"insert","lines":["",""],"id":81},{"start":{"row":31,"column":0},"end":{"row":31,"column":8},"action":"insert","lines":["        "]}],[{"start":{"row":31,"column":8},"end":{"row":36,"column":7},"action":"insert","lines":["<h2>New Category</h2>","<form action=\"{{ route('categories.store') }}\" method=\"POST\">","    @csrf","    <input type=\"text\" name=\"name\" placeholder=\"Category Name\" required>","    <button type=\"submit\">Add Category</button>","</form>"],"id":82}],[{"start":{"row":36,"column":0},"end":{"row":36,"column":4},"action":"insert","lines":["    "],"id":83}],[{"start":{"row":36,"column":4},"end":{"row":36,"column":8},"action":"insert","lines":["    "],"id":84}],[{"start":{"row":35,"column":4},"end":{"row":35,"column":8},"action":"insert","lines":["    "],"id":85}],[{"start":{"row":35,"column":8},"end":{"row":35,"column":12},"action":"insert","lines":["    "],"id":86}],[{"start":{"row":34,"column":4},"end":{"row":34,"column":8},"action":"insert","lines":["    "],"id":87}],[{"start":{"row":34,"column":8},"end":{"row":34,"column":12},"action":"insert","lines":["    "],"id":88}],[{"start":{"row":33,"column":0},"end":{"row":33,"column":4},"action":"insert","lines":["    "],"id":89}],[{"start":{"row":33,"column":4},"end":{"row":33,"column":8},"action":"insert","lines":["    "],"id":90}],[{"start":{"row":32,"column":0},"end":{"row":32,"column":4},"action":"insert","lines":["    "],"id":91}],[{"start":{"row":32,"column":4},"end":{"row":32,"column":8},"action":"insert","lines":["    "],"id":92}],[{"start":{"row":32,"column":8},"end":{"row":32,"column":12},"action":"insert","lines":["    "],"id":93}],[{"start":{"row":31,"column":8},"end":{"row":36,"column":15},"action":"remove","lines":["<h2>New Category</h2>","            <form action=\"{{ route('categories.store') }}\" method=\"POST\">","            @csrf","            <input type=\"text\" name=\"name\" placeholder=\"Category Name\" required>","            <button type=\"submit\">Add Category</button>","        </form>"],"id":95}],[{"start":{"row":31,"column":8},"end":{"row":36,"column":15},"action":"insert","lines":["<h2>New Category</h2>","            <form action=\"{{ route('categories.store') }}\" method=\"POST\">","            @csrf","            <input type=\"text\" name=\"name\" placeholder=\"Category Name\" required>","            <button type=\"submit\">Add Category</button>","        </form>"],"id":96}]]},"ace":{"folds":[],"scrolltop":180,"scrollleft":0,"selection":{"start":{"row":31,"column":29},"end":{"row":31,"column":29},"isBackwards":false},"options":{"guessTabSize":true,"useWrapMode":false,"wrapToView":true},"firstLineState":{"row":11,"state":"start","mode":"ace/mode/php_laravel_blade"}},"timestamp":1728443884513,"hash":"3a9ab22159a996dfca346b30d05a0364c286b5cc"}