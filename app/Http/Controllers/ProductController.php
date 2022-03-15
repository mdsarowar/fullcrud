<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Product;

class ProductController extends Controller
{

    protected $product;
    public function index(){
        return view('product.add');
    }

    public function js(){
        return view('js.js');
    }

    public function newProduct(Request $request){
//        return $request->all();


        Product::SaveData($request);
        return redirect()->back()->with('message','Product created successfully');

    }
    public function manageProduct(){

//        Product::all();
//        return Product::where('status',1)->get();
//        return Product::orderBy('id',DESC);
//        return Product::latest()->get();
        return view('product.manage',[
            'products'=>Product::all(),
        ]);
    }

    public function deleteProduct($id){
        $this->product=Product::findOrFail($id);
        if(file_exists($this->product->image))
        {
            unlink($this->product->image);
        }
        $this->product->delete();
        return redirect()->back()->with('message','product delete successfullu');
    }

    public function productStatus($id){
       $this->product= Product::findOrFail($id);
       $this->product->status=$this->product->status ==1 ? 0 : 1;
       $this->product->save();
       return redirect()->back()->with('message','staus change successfully');
    }

    public function editProduct($id){

        return view('product.edit',[
           'product'=>Product::findOrFail($id)
        ]);
    }

    public function updateProduct(Request $request){
        Product::updateData($request);
//return 'sdf';
        return redirect(route('manage_product'))->with('message','update successfully');
//        return redirect(route())->with('message','update successfully');

    }
}
