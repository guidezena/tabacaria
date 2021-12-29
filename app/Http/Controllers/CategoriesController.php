<?php

namespace App\Http\Controllers;

use App\Models\Category;
use Illuminate\Http\Request;

class CategoriesController extends Controller
{
    public function index(){
        return view('category.index')->with('categories', Category::all());
    }
    public function create(){
        return view ('category.create');
    }
    public function store(Request $request)
    {
        Category::create($request->all());
        session()->flash('success', 'Categoria cadastrado com sucesso!');
        return redirect(route('category.index'));
    }
}
