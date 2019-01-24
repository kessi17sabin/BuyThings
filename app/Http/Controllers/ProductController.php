<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests\product\StoreRequestProduct;
use App\Http\Requests\product\UpdateRequestProduct;
use Intervention\Image\Facades\Image;
use Illuminate\Support\Facades\Auth;
use App\Category;
use App\Product;

class ProductController extends Controller
{

    protected $uploadPath;

  public function __construct()
  {
      $this->middleware('auth');
      $this->uploadPath = public_path(config('cms.image.directory'));
  }

  public function showProduct()
    {
      $products = Product::with('category')->get();
      return view('admin.product.allfiles',compact('products'))->render();
    }

  public function createProduct()
    {
      $products = Product::with('category')->get();
      $categories = Category::all();
      return view('admin.product.create',compact('products','categories'));
    }

  public function storeProduct(StoreRequestProduct $request, Product $product)
    {
      $values=$request->all();
      $imageName1 = $this->handleRequestImage($request,"image1");
      if ($request->hasFile('image2')) {
        $imageName2 = $this->handleRequestImage($request,"image2");
      }
      else{
          $imageName2 = NULL;
      }
      if ($request->hasFile('image3')) {
        $imageName3 = $this->handleRequestImage($request,"image3");
      }
      else{
          $imageName3 = NULL;
      }

      $product = Product::create([
        'user_id'  => Auth::user()->id ,
        'category_id' => $request->category_id ,
        'product_name' => $request->product_name ,
        'price' => $request->product_price ,
        'product_brand' => $request->product_brand,
        'product_desc' => $request->product_desc,
        'image' => $imageName1,
        'image1' => $imageName2,
        'image2' => $imageName3,
      ]);
      return redirect()->route('showproduct')->with('message',"$request->product_name product has been added successfully");
    }

    public function handleRequestImage($request, $image=NULL)
    {
        if ($request->hasFile("$image")) {

            $photo = $request->file("$image");
            $filename = $photo->getClientOriginalName();
            $destination = $this->uploadPath;

            $uploadSuccess = $photo->move($destination,$filename);

            if ($uploadSuccess) {
               Image::make($destination . '/' . $filename)->save();
            }

        }
        return $filename;
    }

  public function editProduct($id)
    {
      $product = Product::with('category')->find($id);
      $categories = Category::all();
      return view('admin.product.editproduct',compact('product','categories'))->render();
    }

  public function updateProduct(UpdateRequestProduct $request,$id)
  {
    $product=Product::find($id);
    $oldImage1=$product->image;
    $oldImage2 = $product->image1;
    $oldImage3 = $product->image2;
    $data=$request->all();
    $imageName1 = $this->handleRequestImage($request,"image1");
      if ($request->hasFile('image2')) {
        $imageName2 = $this->handleRequestImage($request,"image2");
      }
      else{
          $imageName2 = NULL;
      }
      if ($request->hasFile('image3')) {
        $imageName3 = $this->handleRequestImage($request,"image3");
      }
      else{
          $imageName3 = NULL;
      }

      if ($imageName1 !== $oldImage1) {
          $this->removeImage($oldImage1);
      }

      if ($imageName2 !== $oldImage2) {
        $this->removeImage($oldImage2);
    }

    if ($imageName3 !== $oldImage3) {
        $this->removeImage($oldImage3);
    }


      $product -> fill([
        'user_id'  => Auth::user()->id ,
        'category_id' => $request->category_id ,
        'product_name' => $request->product_name ,
        'price' => $request->product_price ,
        'product_brand' => $request->product_brand,
        'product_desc' => $request->product_desc,
        'image' => $imageName1,
        'image1' => $imageName2,
        'image2' => $imageName3,
      ]);
      $product->save();

    return redirect()->route('showproduct')->with('message',"$request->product_name product has been replaced successfully");
  }

  public function destroyProduct($id)
  {
    $product = Product::findOrFail($id);
    $product->delete();
    return redirect()->back()->with('message' , "$product->product_name product has been deleted successfully");
  }

  public function removeImage($image)
  {
      if(!empty($image)){
        $imagePath = $this->uploadPath . '/' . $image ;

        if(file_exists($imagePath)){
            unlink($imagePath);
        }
      }
  }



}
