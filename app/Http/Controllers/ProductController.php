<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Category;
use App\Models\Product;
use Intervention\Image\Facades\Image as Image;

class ProductController extends Controller
{
    public function index(){
        $product=Product::all();
        $countDeletedProduct=Product::onlyTrashed()->count();
        return view('admin/product/show')->with(compact('product','countDeletedProduct'));
    }
    public function insert(Request $request){
        $category=Category::all();
        if ($request->isMethod('POST')) {
            $data=$request->all();
            $product=new Product();
            $product->product_name=$data['product_name'];
            $product->id_category=$data['id_category'];
            $product->code=$data['code'];
            $product->color=$data['color'];
            $product->description=$data['description'];
            $product->price=$data['price'];
            if ($request->hasFile('image')) {
                $img_tmp=$request->image;
                // echo "<pre>";print_r($img_tmp);die;
                if ($img_tmp->isValid()) {
                    $extension=$img_tmp->getClientOriginalExtension();
                    $filename=rand(111,99999).'.'.$extension;
                    $large_image_path='Product/large/'.$filename;
                    $medium_image_path='Product/medium/'.$filename;
                    $small_image_path='Product/small/'.$filename;
                    Image::make($img_tmp)->save($large_image_path);
                    Image::make($img_tmp)->resize(600,600)->save($medium_image_path);
                    Image::make($img_tmp)->resize(300,300)->save($small_image_path);
                    $product->image=$filename;
                    
                }
            }
            $product->save();
            return redirect('/products');
        }
        return view('admin/product/insert')->with(compact('category'));
    }
    public function edit(Request $request,$id=null){
        $oldProduct = Product::find($id);
        $category=Category::all();
        
        if ($request->isMethod('POST')) {
            $data=$request->all();
            if ($request->hasFile('image')) {
                $img_tmp=$request->image;
                if ($img_tmp->isValid()) {
                    $extension=$img_tmp->getClientOriginalExtension();
                    $filename=rand(111,99999).'.'.$extension;
                    $large_image_path='Product/large/'.$filename;
                    $medium_image_path='Product/medium/'.$filename;
                    $small_image_path='Product/small/'.$filename;
                    Image::make($img_tmp)->save($large_image_path);
                    Image::make($img_tmp)->resize(600,600)->save($medium_image_path);
                    Image::make($img_tmp)->resize(300,300)->save($small_image_path);
                }
            }
            else{
                $filename=$data['current_image'];
            }
        
            Product::where(['id'=>$id])->update(['product_name'=>$data['product_name'],'image'=>$filename,'code'=>$data['code'],
            'color'=>$data['color'],'description'=>$data['description'],'price'=>$data['price']]);
            return redirect('/products');
        }
        return view('admin/product/edit')->with(compact('oldProduct','category'));
    }
    public function delete($id=null) {
        if (!empty($id)) {
            Product::where(['id'=>$id])->delete();
            return redirect('/products');
        }
        
    }
    public function trash() {
        $deletedProduct=Product::onlyTrashed()->get();
        return view('admin/product/trash')->with(compact('deletedProduct'));
    }
    public function restore($id=null) {
        Product::where(['id'=>$id])->restore();
        return redirect('/products');
    }
    public function destroy($id=null) {
        Product::where(['id'=>$id])->forceDelete();
        return redirect('/products');
    }

}