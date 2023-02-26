<?php

namespace App\Http\Controllers\Api;

use App\Models\Post;
use App\Models\Category;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Http\Requests\category\PutCategoryRequest;
use App\Http\Requests\category\StoreCategoryRequest;


class CategoryController extends Controller
{
   
    public function index()
    {
        return response()->json(Category::paginate(10));
    }


    public function all()
    {
        return response()->json(Category::get());
    }


    public function slug($slug)
    {
        $category = Category::where("slug", $slug)->firstOrFail();
        
        return response()->json($category);
    }


    public function store(StoreCategoryRequest $request)
    {
        return response()->json(Category::create($request->validated()));
    }

    
    public function show(Category $category)
    {
        return response()->json($category);
    }

    
    public function update(PutCategoryRequest $request, Category $category)
    {
        $category->update($request->validated());
        return response()->json($category);
    }


    public function destroy(Category $category)
    {
        $category->delete();
        return response()->json("ok");
    }

    public function posts(Category $category)
    {
        //********** Manera de Query Buielder *********//
        //tots els post d'una categoria
        // $posts= Post::join('categories',"categories.id", "=", "posts.category_id")
        //     ->select('posts.*', 'categories.title as category')
        //     ->where('categories.id', $category->id)
        //     ->get();
        //     ->toSql();


        //********** Manera de Elequent *********//
        
        $posts = Post::with("category")
        ->where("category_id", $category->id)
        //->get();
        ->toSql();
        

        return response()->json($posts);

    }
    
}
