<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Category;

class CategoryController extends Controller
{
    public function index(){
        $category=Category::all();
        return view('admin/category/show')->with(compact('category'));
    }
    public function insert(Request $request){
        if ($request->isMethod('POST')) {
            $data = $request->all();
            $category = new Category();
            $category->category_name = $data['category_name'];
            $category->description = $data['description'];
            $category->save();
            $success="Thêm loại sản phẩm thành công";
            return redirect('/category')->with('alert',$success);
        }
        return view('admin/category/insert');
    }
    public function edit(Request $request,$id=null){
        if ($request->isMethod('POST')) {
            $data = $request->all();
            Category::where(['id'=>$id])->update(['category_name'=>$data['category_name'],'description'=>$data['description']]);
            $success="Sửa loại sản phẩm thành công";
            return redirect('/category')->with('alert',$success);
        }
        $oldCategory = Category::where(['id'=>$id])->first();
        return view('admin/category/edit')->with(compact('oldCategory'));
    }
    public function delete($id=null) {
        if (!empty($id)) {
            Category::where(['id'=>$id])->delete();
            $success="Xóa thành công";
            return redirect('/category')->with('alert',$success);
        }
        
    }
}
