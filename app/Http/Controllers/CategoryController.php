<?php


namespace App\Http\Controllers;

use App\Models\Category;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Symfony\Component\HttpFoundation\Response;

class CategoryController extends Controller
{

public function index()
{
$categories = Category::with('Post')->get();
return $categories;
}

public function show(Category $category)
{
    return new $category;
}

public function store(Request $request)
{
$data = $request->all();

$category = Category::create($data);

return $category;


}

public function update(Category $category, Request $request)
{
return $category->update($request->all());


}

public function destroy(Category $category)
{
$category->delete();

return response(null, Response::HTTP_NO_CONTENT);

}

}
