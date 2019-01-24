<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests\category\StoreRequestCategory;
use App\Http\Requests\category\UpdateRequestCategory;
use App\Category;

class CategoryController extends Controller
{
  public function showCategory()
    {
      $categories = Category::all();
      return view('admin.category.allfiles',compact('categories'));
    }

  public function createCategory(Category $category)
    {
      return view('admin.category.create',compact('category'));
    }

  public function storeCategory(StoreRequestCategory $request, Category $category)
    {
      $values=$request->all();
      $category = Category::create([
        'category_name' => $request->category_name ,
        'category_types' => $request->category_types
      ]);
      return redirect()->route('edit')->with('message',"$category->category_name category has been added successfully");
    }

  public function edit()
    {
      $categories = Category::all();
      return view('admin.category.edit',compact('categories'));
    }

  public function editCategory($id)
    {
      $category = Category::find($id);
      return view('admin.category.editcategory',compact('category'));
    }

  public function updateCategory(UpdateRequestCategory $request,$id)
  {
    $values=$request->all();
    $category = Category::where('id', $id)->update([
      'category_name' => $request->category_name ,
      'category_types' => $request->category_types
    ]);
    return redirect()->route('edit')->with('message',"$request->cat_name category has been replaced successfully");
  }

  public function destroyCategory($id)
  {
    $category = Category::findOrFail($id);
    $category->delete();
    return redirect()->back()->with('message' , "$category->category_name category has been deleted successfully");
  }



}
