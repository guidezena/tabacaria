<!DOCTYPE html>
<html lang="pt-br">

<head>
    <!-- CSS only -->
    <!-- JavaScript Bundle with Popper -->
    <meta charset="UTF-8">
    <title>Garden Jabaquara</title>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous">
    </script>


</head>

<body>
    <header>
        <nav class="navbar navbar-expand-sm navbar-light bg-white shadow-sm">
            <div class="container">
                <a class="navbar-brand" href="{{ url('/') }}">Navbar</a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-target="#navbarNavDropdown"
                    aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarNavDropdown">
                    <ul class="navbar-nav">
                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuCategoria"
                                data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                Categoria
                            </a>
                            <ul class="dropdown-menu" aria-labelledby="navbarDropdownMenuCategoria">
                                @foreach (\App\Models\Category::all() as $category)
                                    <li><a class="dropdown-item" href="#">{{ $category->name }}</a></li>
                                @endforeach
                            </ul>
                        </li>
                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuTag"
                                data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                Tags
                            </a>
                            <ul class="dropdown-menu" aria-labelledby="navbarDropdownMenuTag">
                                @foreach (\App\Models\Tag::all() as $tag)
                                    <li><a class="dropdown-item" href="#">{{ $tag->name }}</a></li>
                                @endforeach
                            </ul>
                        </li>
                    </ul>
                </div>
            </div>
        </nav>
    </header>
    <main class="container my-2">
        @if (session()->has('success'))
            <div class="alert alert-success" role="alert">
                {{ session()->get('success') }}
            </div>
        @endif

        @if (session()->has('error'))
            <div class="alert alert-danger" role="alert">
                {{ session()->get('error') }}
            </div>
        @endif
        @yield('content')
        
    </main>
    <footer class="container bg-warning text-white p-5 d-block">
        <div class="row">
            <div class="col-6">
                <h2>Localização loja</h2>
                <address>
                    Rua niterói 400.<br>
                    São Caetano, SP<br>
                    04335-050<br>
                    Telefone - (11)92325-5250
                </address>
            </div>
            <div class="col-6">
                <h2>Horario do funcionamento</h2>
                <ul>
                    <li>Segunda - Sexta : 9:00h as 18:00h</li>
                    <li>Sabado : 10:00h as 15:00h</li>
                </ul>
            </div>
        </div>
    </footer>

</body>

</html>
