<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Tag;
use Illuminate\Http\Request;
use App\Models\Product;
use Illuminate\Support\Facades\Storae;

class ProductsController extends Controller
{
    public function index()
    {
        return view('product.index')->with('products', Product::all());
    }

    public function show(Product $product){
        // session()->flash('success', 'Produto foi cadastrado com sucesso!');
        // session()->flash('error', 'Produto foi cadastrado com sucesso!');
        return view ('product.show')->with('product', $product);
    }
    public function create()
    {
        return view('product.create')->with(['categories' => Category::all(), 'tags' => Tag::all()]);
    }

    public function store(Request $request)
    {
        if($request->image){
            $image = $request->file('image')->store('product');
            $image = "storage/" . $image;
        }else{
            $image = "storage/product/imagem.png";
        }

        $product = Product::create([
            'name'=>$request->name,
            'description'=>$request->description,
            'price'=>$request->price,
            'category_id'=>$request->category_id,
            'image'=>$image
        ]);
        $product->tags()->sync($request->tags);
        session()->flash('success', 'Produto foi cadastrado com sucesso!');
        return redirect(route('product.index'));
    }

    public function edit(Product $product)
    {
        return view('product.edit')->with
        (['product' => $product,
        'categories' => Category::all(), 
        'tags' => Tag::all()]);
    }

    public function update(Request $request, Product $product)
    {
        if($request->image){
            $image = $request->file('image')->store('product');
            $image = "storage/" . $image;
            
            if($product->image != "storage/product/imagem.png")
                    Storage::delete(str_replace('storage/','', $product->image));
            }else{
                $image = $product->image;
            }

       
        $product->update(['name'=> $request->name,
        'description'=>$request->description,
        'price'=>$request->price,
        'category_id'=>$request->category_id,
        'image'=>$image
    ]);
        $product->tags()->sync($request->tags);
        session()->flash('success', 'Produto foi alterado com sucesso!');
        return redirect(route('product.index'));
    }

    public function destroy(Product $product){
        $product->delete();
        session()->flash('success', 'Produto foi apagado com sucesso!');
        return redirect(route('product.index'));
    }

    public function trash(){
        return view('product.trash')->with('products', Product::onlyTrashed()->get());
        
    }

    public function restore($id){
        $product = Product::onlyTrashed()->where('id',$id)->firstOrFail();

        $product->restore();
        session()->flash('success', 'Produto foi restaurado com sucesso!');
        return redirect(route('product.trash'));
    }

}
