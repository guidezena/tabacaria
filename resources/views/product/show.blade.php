@extends('layouts.store')

@section('content')
    <nav aria-label="breadcrumb">
        <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="{{ url('/') }}">Garden</a></li>
            <li class="breadcrumb-item"><a href="#">{{ $product->category->name }}</a></li>
            <li class="breadcrumb-item active" aria-current="page">{{ $product->name }}</li>
        </ol>
    </nav>
    <div class="row my-5">
        <div class="col-6 text-center">
            <img src="{{ asset($product->image) }}" style="width: 250px">
        </div>
        <div class="col-6 text-center">
            <h2>{{ $product->name }}</h2>
            <hr>

            <p class="my-3">{{ $product->description }}</p>
            <span class="h4 d-block my-3">R${{ $product->price }}</span>
            <button class="btn btn-primary my-3">Adicionar ao carrinho</button>
            <div class="d-block">
                <span class="h4 d-block">Tags:</span>
                @foreach ($product->tags as $tag)
                    <a href="#" class="btn btn-sm btn-danger">{{ $tag->name }}</a>
                @endforeach
            </div>
        </div>
    </div>

   
@endsection
