<?php

namespace App\Http\Controllers;

use App\Models\Category;
use Illuminate\Http\Request;

class CategoriesController extends Controller
{
    public function index()
    {
        return view('category.index')->with('categories', Category::all());
    }
    public function create()
    {
        return view('category.create');
    }
    public function store(Request $request)
    {
        Category::create($request->all());
        session()->flash('success', 'Categoria cadastrado com sucesso!');
        return redirect(route('category.index'));
    }
    public function destroy(Category $category)
    {
        if ($category->products()->count() > 0) {
            session()->flash('success', 'Voce nao pode deletar uma categoria que tenha produto');
            return redirect(route('category.index'));
        }
        $category->delete();
        session()->flash('success', 'Categoria foi apagado com sucesso!');
        return redirect(route('category.index'));
    }


    public function edit(Category $category)
    {
        return view('category.edit')->with('category', $category);
    }
    public function update(Request $request, Category $category)
    {
        $category->update($request->all());
        session()->flash('success', 'categoria foi alterado com sucesso!');
        return redirect(route('category.index'));
    }
    
    public function trash(){
        return view('category.trash')->with('categories', Category::onlyTrashed()->get());
    }
    
    // public function restore($id){
    //     $category = Category::onlyTrashed()->where('id',$id)->firstOrFail();
    //     $category->restore();
    //     session()->flash('success', 'A categoria foi restaurado com sucesso!');
    //     return redirect(route('category.index'));
    // }
}
