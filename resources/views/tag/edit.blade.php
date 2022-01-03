<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <title>Categorias</title>
</head>

<body> 
    @include('layouts.menu')
    <main class="container mt-5">
       
        <h1>Editar</h1>
        <form method="POST" action="{{ route('tag.update', $tag->id) }}">
            @csrf
            @method('PATCH')
            <div class="row">
                <span class="form-label">Nome</span>
                <input type="text" name="name" class="form-control" value="{{$tag->name}}">
            </div>
        </form>
    </main>
</body>

</html>