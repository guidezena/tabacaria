<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <title>Lista de categorias</title>
    <script>
        function remover(route){
            if(confirm('Você deseja remover a categoria?')){
                    window.location = route
            }
        }
    </script>

</head>

<body class="container mt-5">
    @if(session()->has('success'))
    <div class="alert alert-success" role="alert">
        {{session()->get('success')}}
    </div>
    @endif
    <h1>Lista de categorias</h1>
    <a href="{{ route('category.create') }} " class="btn btn-lg btn-primary">Criar categorias</a>

    <div class="row">
        <table class="table table-striped">
            <thead>
                <tr>
                    <th>ID</th>
                    <th>Nome</th>
                </tr>
            <tbody>
            @foreach($categories as $cat)
                <tr>
                    <td>{{$cat -> id}}</td>
                    <td>{{$cat -> name}}</td>
                    <td>
                        <a href="#" class="btn btn-sm btn-info">Visualizar</a>
                        <a href="#" class="btn btn-sm btn-warning">Editar</a>
                        <a href="#" onclick="remover('#');" class="btn btn-sm btn-danger">Apagar</a>
                    </td>
                </tr>
                @endforeach
            </tbody>
            </thead>
        </table>

    </div>
</body>

</html>