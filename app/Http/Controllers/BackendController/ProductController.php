<?php

namespace App\Http\Controllers\BackendController;

use App\Http\Controllers\Controller;
use App\Models\Brand;
use App\Models\Category;
use App\Models\Product;
use App\Models\SubCategory;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    function ImageStore($request){
        $extension = $request->thumbnail_image->extension();
        $image_name =Str($request->product_title)->slug() . '-product'.'.' . $extension;
        $path = $request->thumbnail_image->storeAs('ProductImage/', $image_name,'public');
        $img_url = env('APP_URL'). 'storage/'. $path;
        return[
            'thumbnail_name' => $image_name,
            'thumbnail_url' => $img_url
        ];
    }


    function index(){
        $brands = Brand::select('id','title')->get();
        $categories = Category::select('id','title')->get();
        $sub_categories = SubCategory::select('id','title')->get();
        return view('Backend.Product.index_product',compact('brands','categories','sub_categories'));
    }
    function StoreProduct(Request $request){
        // dd($request->all());
        // $request->validate([
        //     'product_title' => 'required|max:100',
        //     'product_slug' => 'unique:products,product_slug',
        //     'price' => 'required',
        //     'status' => 'required',
        //     'quantity' => 'required',
        //     'color' => 'required',
        //     'size' => 'required',
        //     'thumbnail_image'=> 'required',
        // ]);

            // $product = new Product();
            // $product->product_title = $request->product_title;
            // $product->product_slug = $request->product_slug ? str($request->product_slug)->slug() : str($request->product_title)->slug();
            // $product->price = $request->price;
            // $product->disc_price = $request->disc_price;
            // $product->disc_price_date_start= $request->disc_price_date_start;
            // $product->disc_price_date_end = $request->disc_price_date_end;
            // $product->status = $request->status;
            // $product->quantity = $request->quantity;
            // $product->color = $request->color;
            // $product->size = $request->size;
            // $product->details = $request->details;
            // $product->desc = $request->desc;
            // $product->save();
            // return back();


        //    $gall_img = $request->gallary_image;
        //    foreach($gall_img as $gall_image){
        //     $extension = $gall_image->extension();
        //     $image_name =Str($request->product_title)->slug() . '-product-'. uniqid().'.' . $extension;
        //     $path = $gall_image->storeAs('ProductImage/', $image_name,'public');
        //     $img_url = env('APP_URL'). 'storage/'. $path;

        //    }
        //  $this->ImageStore($request);

    }
}
