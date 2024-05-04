<?php

namespace App\Http\Controllers\BackendController;

use App\Models\Category;
use Illuminate\Support\Str;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\SubCategory;

class CategoryController extends Controller
{
    function index(){
        $categories = Category::select('id','title')->get();
        return view('Backend.Category.category',compact('categories'));
    }

    // category store on database
    function StoreCategory(Request $request){
        // Validation Category
        $request->validate([
            'category_title' => 'required|max:15',
            'category_slug' => 'unique:categories,slug',

        ]);
        $categories = new Category();
        $categories->title = $request->category_title;
        if(empty($request->category_slug)){
             $categories->slug =Str::slug($request->category_title);
        }else{
            $categories->slug = $request->category_slug;
        }
        $categories->save();
    }

    function StoreSubCategory(Request $request){
        $request->validate([
            'sub_category_title'=> 'required|max:20',
            'sub_category_slug' => 'unique:sub_categories,slug',
            'parent_category' => 'required',
        ]);

        $subcategories = new SubCategory();

        $subcategories->title = $request->sub_category_title;
        if(empty($request->sub_category_slug)){
            $subcategories->slug =Str::slug($request->sub_category_title);
       }else{
           $subcategories->slug = $request->sub_category_slug;
       }
       $subcategories->Categories_id = $request->parent_category;
       $subcategories->save();
    }















    function fetchCategory(Category $categories){
        $categories = Category::SimplePaginate(6);
        return view('Backend.Category.all_category',compact('categories'));
    }
    function fetchSubCategory(SubCategory $subcategories){
        $subcategories = SubCategory::SimplePaginate(6);
        return view('Backend.Category.all_sub_category',compact('subcategories'));
    }






}
