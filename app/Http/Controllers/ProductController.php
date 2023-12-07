<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Product;
use Illuminate\Support\Facades\Validator;
use Illuminate\Validation\ValidationException;

class ProductController extends Controller
{
    public function index(){
        $products = Product::all();
        return view('products.index',['products_data'=>$products]);
    }
    public function create(){
        return view('products.create');
    }

    /**
     * @throws ValidationException
     */
    public function store(Request $request){
        $data = Validator::make($request->all(),[
            'name'=>'required',
            'qty'=>'required|numeric',
            'price'=>'required|decimal:0,2',
            'description'=>'nullable',
        ])->validate();
        $newProduct = Product::insert($data);
        return redirect(route('product.index'));
    }

    public function edit(Product $productId){
      return view('products.edit',['productForEdit'=> $productId]);
    }
    public function update(Product $productId, Request $request){
        $validData = $request->validate([
            'name'=>'required',
            'qty'=>'required|numeric',
            'price'=>'required|decimal:0,2',
            'description'=>'nullable',
        ]);
         $productId->update($validData);
         return redirect(route('product.index'))->with('success','Product updated successfully');
    }
    public function destroy(Product $productId){
        $productId->delete();
        return redirect(route('product.index'))->with('success','Product deleted successfully');




    }



}
