<?php
namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Category;

class CategoryController extends Controller
{
    public function index(Category $category)
    {
        return view('categories.index')->with(['posts' => $category->getByCategory()]);
    }
    
    public function store(Request $request)
    {
        // バリデーション
        $validated = $request->validate([
            'name' => 'required|string|max:50',
        ]);

        // 同じ名前のカテゴリーが存在するか確認
        $existingCategory = Category::where('name', $validated['name'])->first();

        if ($existingCategory) {
            // カテゴリーが存在する場合の処理
            return redirect()->back()->with('error', 'Category already exists!');
        }

        // カテゴリーを作成
        Category::create([
            'name' => $validated['name'],
        ]);

        // リダイレクト
        return redirect()->back()->with('success', 'Category added successfully!');
    }

}
?>