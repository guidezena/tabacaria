<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <title>Cadastrar Produto</title>
</head>

<body>
    @include('layouts.menu')
    <main class="container mt-5">
        @method('PATCH')
        
        <h1>Editar</h1>
        <form method="POST" action="{{ route('product.update', $product->id) }}">
            @csrf
            @method('PATCH')
            <div class="row">
                <span class="form-label">Nome</span>
                <input type="text" name="name" class="form-control" value="{{$product->name}}">
            </div>
            <div class="row">
                <span class="form-label">Descrição</span>
                <textarea class="form-control" name="description">{{$product->description}}</textarea>
            </div>
            
            <div class="row">
                <span class="form-label">Preço</span>
                <input type="number" min="0.00" max="1000.00" name="price" class="form-control" value="{{$product->price}}">
            </div>
            <div class="row">
                <span class="form-label">Imagem</span>
                <input type="file" min="0.00" max="1000.00" name="image" class="form-control">
            </div>
            <div class="row">
                <span class="form-label">Tag</span>
                
               <select class="form-select" name="tags[]" multiple>
                @foreach($tags as $tag)
                   <option value="{{$tag->id}}" @if($product->tags->contains($tag->id)) selected @endif >{{$tag->name}}</option>
                   @endforeach
                </select>
            </div>
            <div class="row">
                <span class="form-label">Categoria</span>
               <select class="form-select" name="category_id">
                @foreach($categories as $category)
                   <option value="{{$category->id}}" @if($category->id == $product->category_id) selected @endif>     
                    {{$category->name}}
                    </option>
                   @endforeach
                </select>
            </div>
            <div class="row mt-4">
                <button type="submit" class="btn btn-success btn-lg">Salvar</button>
            </div>

        </form>
    </main>
</body>

</html>