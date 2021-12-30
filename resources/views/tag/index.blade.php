<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <title>Lista de tags</title>
    <script>
        function remover() {
            return confirm('Você deseja remover a tag?');
        }
    </script>

</head>

<body>
    <main class="container mt-5">
        @include('layouts.menu')
        @if(session()->has('success'))
        <div class="alert alert-success" role="alert">
            {{session()->get('success')}}
        </div>
        @endif
        <h1>Lista de tags</h1>
        <a href="{{ route('tag.create') }} " class="btn btn-lg btn-primary">Criar tag</a>

        <div class="row">
            <table class="table table-striped">
                <thead>
                    <tr>
                        <th>ID</th>
                        <th>Nome</th>
                    </tr>
                <tbody>
                    @foreach($tag as $tags)
                    <tr>
                        <td>{{$tags -> id}}</td>
                        <td>{{$tags -> name}}</td>
                        <td>
                            <a href="#" class="btn btn-sm btn-info">Visualizar</a>
                            <a href="{{route('tag.edit', $tags->id) }}" class="btn btn-sm btn-warning">Editar</a>
                            <form action="{{route('tag.destroy', $tags->id)}}" method="POST" onsubmit="return remover()" class="d-inline">
                                @method('DELETE')
                                @csrf
                                <button type="submit" class="btn btn-sm btn-danger">Apagar</button>
                            </form>
                        </td>
                    </tr>
                    @endforeach
                </tbody>
                </thead>
            </table>

        </div>
    </main>
</body>

</html>