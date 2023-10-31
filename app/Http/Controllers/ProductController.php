<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Product;
use App\Models\Item;
use DB;

class ProductController extends Controller
{
    public function create(){
        return view('create');
    }

    public function store(Request $request){
        $validation = $request->validate([
            'name' => 'required',
            'price' => 'required',
        ], [
            'name.required' => 'Name is required',
            'price.required' => 'Price is required'

        ]);

        $product = new Product;
        $product->name = $request->name;
        $product->price = $request->price;
        $product->save();
        return view('creates',compact('product'));
    }
    
    public function store1(Request $request){
        $validated = $request->validate([
            'quntity' => 'required',
        ], [
            'quntity.required' => 'Quntity is required',
        ]);
        $product = Product::find($request->id);
        $product->quntity = $request->quntity;
        $product->save();
        return redirect()->route('itemsform');
    }

    public function itemsform(Request $request){
        $category = Product::all();
        return view('itemsform',compact('category'));
    }

    public function subcategory(Request $request){
        $product = new Item;
        $product->vegid = $request->vegid;
        $product->itemname = $request->itemname;
        $product->save();
        return redirect()->route('index');
    }

    public function read($id){
        $items = DB::table('products')->where('products.id', $id)
        ->join('items','vegid','=','products.id')
        ->get();
        return view('read',compact('items'));
    }

    public function index(){
        $product = Product::all();
        return view('table',compact('product'));
    }

    public function edit($id){
        $subject = Product::find($id);
        return view('update',compact('subject'));
    }

    public function update(Request $request,$id){
        $product = Product::find($id);
        $product->name = $request->name;
        $product->price = $request->price;
        $product->save();
        return redirect()->route('index');
    }

    public function delete($id){
        $product = Product::find($id);
        $product->delete();
        Item::where('vegid', $id)->delete();
        return redirect()->route('index');
    }

    public function deleteentry(){
        $deleted_product = Product::onlyTrashed()->get();
        return view('deleted-table',compact('deleted_product'));
    }

    public function restoreentry($id){
        $deleted_product = Product::withTrashed()->find($id);
        $deleted_product->restore();
        Item::where('vegid', $id)->restore();
        return redirect()->route('index');
    }

    /** Permenent Delete */
    public function permenentdelete($id){
        $product = Product::withTrashed()->find($id);
        $product->forceDelete();
        Item::where('vegid', $id)->forceDelete();
        return redirect()->route('deleteentry');
    }
}