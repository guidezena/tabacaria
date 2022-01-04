<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <title>Lixeira Categoria</title>
    <script>
        function restaurar() {
            return confirm('Você deseja restaurar a categoria??');
        }
    </script>

</head>

<body>
    @include('layouts.menu')
    <main class="container mt-5">
        
        @if(session()->has('success'))
        <div class="alert alert-success" role="alert">
            {{session()->get('success')}}
        </div>
        @endif
        <h1>Lixeira de categorias</h1>
        

        <div class="row">
            <table class="table table-striped">
                <thead>
                    <tr>
                        <th>ID</th>
                        <th>Nome</th>
                        <th>Produtos</th>
                    </tr>
                <tbody>
                    @foreach($categories as $cat)
                    <tr>
                        <td>{{$cat -> id}}</td>
                        <td>{{$cat -> name}}</td>
                        <td>{{$cat -> products -> count() }}</td>
                        <td>
                            
                            <form action="{{route('category.destroy', $cat->id)}}" method="POST" onsubmit="return restaurar()" class="d-inline">
                                @method('PATCH')
                                @csrf
                                <button type="submit" class="btn btn-sm btn-warning">RESTAURAR</button>
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