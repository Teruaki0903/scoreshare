{"filter":false,"title":"CategoryController.php","tooltip":"/blog/app/Http/Controllers/CategoryController.php","undoManager":{"mark":57,"position":57,"stack":[[{"start":{"row":0,"column":0},"end":{"row":3,"column":0},"action":"insert","lines":["<?php","","namespace App\\Http\\Controllers;",""],"id":1}],[{"start":{"row":3,"column":0},"end":{"row":4,"column":0},"action":"insert","lines":["",""],"id":2},{"start":{"row":4,"column":0},"end":{"row":4,"column":1},"action":"insert","lines":[">"]}],[{"start":{"row":4,"column":0},"end":{"row":4,"column":1},"action":"remove","lines":[">"],"id":3}],[{"start":{"row":4,"column":0},"end":{"row":4,"column":1},"action":"insert","lines":["."],"id":4}],[{"start":{"row":4,"column":0},"end":{"row":4,"column":1},"action":"remove","lines":["."],"id":5}],[{"start":{"row":4,"column":0},"end":{"row":4,"column":1},"action":"insert","lines":[">"],"id":6}],[{"start":{"row":4,"column":0},"end":{"row":4,"column":1},"action":"insert","lines":["/"],"id":7},{"start":{"row":4,"column":1},"end":{"row":4,"column":2},"action":"insert","lines":["p"]}],[{"start":{"row":4,"column":2},"end":{"row":4,"column":3},"action":"insert","lines":["h"],"id":8},{"start":{"row":4,"column":3},"end":{"row":4,"column":4},"action":"insert","lines":["p"]}],[{"start":{"row":4,"column":3},"end":{"row":4,"column":4},"action":"remove","lines":["p"],"id":9},{"start":{"row":4,"column":2},"end":{"row":4,"column":3},"action":"remove","lines":["h"]},{"start":{"row":4,"column":1},"end":{"row":4,"column":2},"action":"remove","lines":["p"]}],[{"start":{"row":4,"column":0},"end":{"row":4,"column":1},"action":"remove","lines":["/"],"id":10}],[{"start":{"row":4,"column":0},"end":{"row":4,"column":1},"action":"insert","lines":["?"],"id":11}],[{"start":{"row":4,"column":2},"end":{"row":5,"column":0},"action":"insert","lines":["",""],"id":12},{"start":{"row":5,"column":0},"end":{"row":6,"column":0},"action":"insert","lines":["",""]}],[{"start":{"row":6,"column":0},"end":{"row":6,"column":32},"action":"insert","lines":["/blog/resources/views/categories"],"id":13}],[{"start":{"row":5,"column":0},"end":{"row":6,"column":32},"action":"remove","lines":["","/blog/resources/views/categories"],"id":14}],[{"start":{"row":1,"column":0},"end":{"row":2,"column":31},"action":"remove","lines":["","namespace App\\Http\\Controllers;"],"id":15}],[{"start":{"row":3,"column":2},"end":{"row":4,"column":0},"action":"remove","lines":["",""],"id":16}],[{"start":{"row":1,"column":0},"end":{"row":2,"column":0},"action":"insert","lines":["",""],"id":17}],[{"start":{"row":2,"column":0},"end":{"row":7,"column":1},"action":"insert","lines":["use App\\Models\\Category;","","public function index(Category $category)","{","    return view('categories.index')->with(['posts' => $category->getByCategory()]);","}"],"id":18}],[{"start":{"row":7,"column":0},"end":{"row":7,"column":4},"action":"insert","lines":["    "],"id":19}],[{"start":{"row":5,"column":0},"end":{"row":5,"column":4},"action":"insert","lines":["    "],"id":20}],[{"start":{"row":6,"column":4},"end":{"row":6,"column":8},"action":"insert","lines":["    "],"id":21}],[{"start":{"row":5,"column":0},"end":{"row":5,"column":4},"action":"insert","lines":["    "],"id":22}],[{"start":{"row":5,"column":0},"end":{"row":5,"column":4},"action":"remove","lines":["    "],"id":23}],[{"start":{"row":4,"column":0},"end":{"row":4,"column":4},"action":"insert","lines":["    "],"id":24}],[{"start":{"row":3,"column":0},"end":{"row":4,"column":1},"action":"insert","lines":["class PostController extends Controller","{"],"id":25}],[{"start":{"row":9,"column":0},"end":{"row":9,"column":1},"action":"insert","lines":["}"],"id":26}],[{"start":{"row":3,"column":6},"end":{"row":3,"column":10},"action":"remove","lines":["Post"],"id":27}],[{"start":{"row":3,"column":6},"end":{"row":3,"column":7},"action":"insert","lines":["C"],"id":28},{"start":{"row":3,"column":7},"end":{"row":3,"column":8},"action":"insert","lines":["a"]},{"start":{"row":3,"column":8},"end":{"row":3,"column":9},"action":"insert","lines":["t"]},{"start":{"row":3,"column":9},"end":{"row":3,"column":10},"action":"insert","lines":["e"]}],[{"start":{"row":3,"column":10},"end":{"row":3,"column":11},"action":"insert","lines":["g"],"id":29},{"start":{"row":3,"column":11},"end":{"row":3,"column":12},"action":"insert","lines":["o"]},{"start":{"row":3,"column":12},"end":{"row":3,"column":13},"action":"insert","lines":["r"]},{"start":{"row":3,"column":13},"end":{"row":3,"column":14},"action":"insert","lines":["y"]}],[{"start":{"row":0,"column":5},"end":{"row":1,"column":0},"action":"insert","lines":["",""],"id":30}],[{"start":{"row":1,"column":0},"end":{"row":1,"column":31},"action":"insert","lines":["namespace App\\Http\\Controllers;"],"id":31}],[{"start":{"row":3,"column":24},"end":{"row":4,"column":0},"action":"insert","lines":["",""],"id":32}],[{"start":{"row":10,"column":5},"end":{"row":11,"column":0},"action":"insert","lines":["",""],"id":33},{"start":{"row":11,"column":0},"end":{"row":11,"column":4},"action":"insert","lines":["    "]},{"start":{"row":11,"column":4},"end":{"row":12,"column":0},"action":"insert","lines":["",""]},{"start":{"row":12,"column":0},"end":{"row":12,"column":4},"action":"insert","lines":["    "]}],[{"start":{"row":12,"column":4},"end":{"row":27,"column":5},"action":"insert","lines":["// カテゴリーを新規追加するメソッド","    public function store(Request $request)","    {","        // バリデーション","        $validated = $request->validate([","            'name' => 'required|string|max:50',","        ]);","","        // カテゴリーを作成","        Category::create([","            'name' => $validated['name'],","        ]);","","        // リダイレクト","        return redirect()->back()->with('success', 'Category added successfully!');","    }"],"id":34}],[{"start":{"row":2,"column":0},"end":{"row":3,"column":0},"action":"insert","lines":["",""],"id":35}],[{"start":{"row":3,"column":0},"end":{"row":3,"column":28},"action":"insert","lines":["use Illuminate\\Http\\Request;"],"id":36}],[{"start":{"row":13,"column":4},"end":{"row":28,"column":5},"action":"remove","lines":["// カテゴリーを新規追加するメソッド","    public function store(Request $request)","    {","        // バリデーション","        $validated = $request->validate([","            'name' => 'required|string|max:50',","        ]);","","        // カテゴリーを作成","        Category::create([","            'name' => $validated['name'],","        ]);","","        // リダイレクト","        return redirect()->back()->with('success', 'Category added successfully!');","    }"],"id":37}],[{"start":{"row":13,"column":4},"end":{"row":36,"column":0},"action":"insert","lines":["public function store(Request $request)","{","    // バリデーション","    $validated = $request->validate([","        'name' => 'required|string|max:50',","    ]);","","    // 同じ名前のカテゴリーが存在するか確認","    $existingCategory = Category::where('name', $validated['name'])->first();","","    if ($existingCategory) {","        // カテゴリーが存在する場合の処理","        return redirect()->back()->with('error', 'Category already exists!');","    }","","    // カテゴリーを作成","    Category::create([","        'name' => $validated['name'],","    ]);","","    // リダイレクト","    return redirect()->back()->with('success', 'Category added successfully!');","}",""],"id":38}],[{"start":{"row":35,"column":0},"end":{"row":35,"column":4},"action":"insert","lines":["    "],"id":39}],[{"start":{"row":34,"column":4},"end":{"row":34,"column":8},"action":"insert","lines":["    "],"id":40}],[{"start":{"row":33,"column":4},"end":{"row":33,"column":8},"action":"insert","lines":["    "],"id":41}],[{"start":{"row":31,"column":4},"end":{"row":31,"column":8},"action":"insert","lines":["    "],"id":42}],[{"start":{"row":30,"column":4},"end":{"row":30,"column":8},"action":"insert","lines":["    "],"id":43}],[{"start":{"row":29,"column":4},"end":{"row":29,"column":8},"action":"insert","lines":["    "],"id":44}],[{"start":{"row":28,"column":4},"end":{"row":28,"column":8},"action":"insert","lines":["    "],"id":45}],[{"start":{"row":26,"column":4},"end":{"row":26,"column":8},"action":"insert","lines":["    "],"id":46}],[{"start":{"row":25,"column":4},"end":{"row":25,"column":8},"action":"insert","lines":["    "],"id":47}],[{"start":{"row":24,"column":4},"end":{"row":24,"column":8},"action":"insert","lines":["    "],"id":48}],[{"start":{"row":23,"column":4},"end":{"row":23,"column":8},"action":"insert","lines":["    "],"id":49}],[{"start":{"row":21,"column":4},"end":{"row":21,"column":8},"action":"insert","lines":["    "],"id":50}],[{"start":{"row":20,"column":4},"end":{"row":20,"column":8},"action":"insert","lines":["    "],"id":51}],[{"start":{"row":18,"column":4},"end":{"row":18,"column":8},"action":"insert","lines":["    "],"id":52}],[{"start":{"row":14,"column":0},"end":{"row":14,"column":4},"action":"insert","lines":["    "],"id":59}],[{"start":{"row":15,"column":4},"end":{"row":15,"column":8},"action":"insert","lines":["    "],"id":60}],[{"start":{"row":16,"column":4},"end":{"row":16,"column":8},"action":"insert","lines":["    "],"id":61}],[{"start":{"row":18,"column":4},"end":{"row":18,"column":8},"action":"remove","lines":["    "],"id":62}],[{"start":{"row":18,"column":4},"end":{"row":18,"column":8},"action":"insert","lines":["    "],"id":63}],[{"start":{"row":17,"column":8},"end":{"row":17,"column":12},"action":"insert","lines":["    "],"id":64}]]},"ace":{"folds":[],"scrolltop":278,"scrollleft":0,"selection":{"start":{"row":10,"column":40},"end":{"row":10,"column":40},"isBackwards":false},"options":{"guessTabSize":true,"useWrapMode":false,"wrapToView":true},"firstLineState":{"row":4,"state":"php-start","mode":"ace/mode/php"}},"timestamp":1728215866058,"hash":"6eb5810c082153b6c98189561c2e144583667af6"}