<?php

namespace App\Http\Controllers\BackendController;

use App\Models\Brand;
use Illuminate\Support\Str;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Redirect;

class BrandController extends Controller
{
    function BrandIndex(){
        $brands = Brand::SimplePaginate(6);
        return view('Backend.Brand.brand',compact('brands'));
    }

    function storeBrand(Request $request){
        // Brand validation start code
        $request->validate([
            'brand_title' => 'required|max:15',
            'brand_title' =>'unique:brands,title',
            'brand_slug' =>'unique:brands,slug',
        ],[
            'brand_title.required' => 'Please enter a Brand name',
            'brand_title.max' => 'Please you Brand name under 15 character',
            'brand_title.unique' => ' This Brand name already entered !',
            'brand_slug.unique' => 'This Brand Slug already entered !',
        ]);
     // Brand validation end  code
        $brands = new Brand();
        $brands->title = $request->brand_title;
        $brands->slug = $request->brand_slug;
        $brands->save();
        return redirect()->route('brand.view')->with('success','Your Brand name add successfully!!!');

    }

    function editBrand(Brand $editedbrand){
        $brands = Brand::SimplePaginate(6);
        return view('Backend.Brand.brand', compact('editedbrand','brands'));
    }

    function updateBrand(Request $request,$id){
        $request->validate([
            'title' => 'required|max:15|unique:brands,slug,'. $id,
        ]);
        $brands = Brand::find($id);
        $brands->title = $request->title;
        $brands->slug =Str::slug($request->slug);
        $brands->save();
        return redirect()->route('brand.view')->with('success','Your Brand name Updated successfully!!!');
    }

    function deleteBrand(Brand $brand){
        $deleteBrand = $brand->delete();
        return redirect()->route('brand.view',compact('deleteBrand'))->with('deletesuccess','Your Brand name Delete successfully!!!');
    }

    function trashBrand(){
        $brands = Brand::onlyTrashed()->get();
        return view('Backend.Brand.restore', compact('brands'));
    }

    public function restoreBrand($id)
    {
        $brands = Brand::onlyTrashed()->find($id);
        $brands->restore(); // This restores the soft-deleted post
        return redirect()->route('brand.view')->with('success','Your Brand name restore successfully!!!');
    }
    public function forceDeleteBrand($id)
    {
        // If you have soft-deleted it before
        $brands = Brand::onlyTrashed()->find($id);

        $brands->forceDelete(); // This permanently deletes the post for ever!
        return redirect()->route('brand.trash')->with('deletesuccess','Your Brand name Delete Permanently!!!');
        // Additional logic...
    }
}

