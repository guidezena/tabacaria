<?php

namespace App\Http\Controllers;

use App\Models\Tag;
use Illuminate\Http\Request;

class TagController extends Controller
{
   
    public function index()
    {
        return view('tag.index')->with('tag', Tag::all());
    }

    public function create()
    {
        return view('tag.create');
    }

    public function store(Request $request)
    {
        Tag::create($request->all());
        session()->flash('success', 'Tag cadastrado com sucesso!');
        return redirect(route('tag.index'));
    }


    public function show(Tag $tag)
    {
        return view('tag.show');
    }


    public function edit(Tag $tag)
    {
        
        return view('tag.edit')->with('tag', $tag);
    }


    public function update(Request $request, Tag $tag)
    {
        $tag->update($request->all());
        session()->flash('success', 'tag foi alterado com sucesso!');
        return redirect(route('tag.index'));
    }

    public function destroy(Tag $tag)
    {
        if ($tag->products()->count() > 0) {
            session()->flash('success', 'Voce nao pode deletar uma tag que tenha produto');
            return redirect(route('tag.index'));
        }
        $tag->delete();
        session()->flash('success', 'tag foi apagado com sucesso!');
        return redirect(route('tag.index'));
    }
    public function trash(){
        return view('tag.trash')->with('tags', Tag::onlyTrashed()->get());
    }
    
    // public function restore($id){
    //     $tag = Tag::onlyTrashed()->where('id',$id)->firstOrFail();

    //     $tag->restore();
    //     session()->flash('success', 'A tag foi restaurado com sucesso!');
    //     return redirect(route('tag.trash'));
    // }
}
