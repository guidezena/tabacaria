@extends('layouts.store')

@section('css')
    <style>
        #banner {
            background: url('https://via.placeholder.com/2000x800');
            background-size: cover;
            background-repeat: no-repeat;
            background-position: center;
            min-height: 400px;

        }

        .carousel-multi-item.v-2.product-carousel .carousel-inner .carousel-item.active,
        .carousel-multi-item.v-2.product-carousel .carousel-item-next,
        .carousel-multi-item.v-2.product-carousel .carousel-item-prev {
            display: -webkit-box;
            display: -webkit-flex;
            display: -ms-flexbox;
            display: flex;
        }

        .carousel-multi-item.v-2.product-carousel .carousel-item-right.active,
        .carousel-multi-item.v-2.product-carousel .carousel-item-next {
            -webkit-transform: translateX(20%);
            -ms-transform: translateX(20%);
            transform: translateX(20%);
        }

        .carousel-multi-item.v-2.product-carousel .carousel-item-left.active,
        .carousel-multi-item.v-2.product-carousel .carousel-item-prev {
            -webkit-transform: translateX(-20%);
            -ms-transform: translateX(-20%);
            transform: translateX(-20%);
        }

        .carousel-multi-item.v-2.product-carousel .carousel-item-right,
        .carousel-multi-item.v-2.product-carousel .carousel-item-left {
            -webkit-transform: translateX(0);
            -ms-transform: translateX(0);
            transform: translateX(0);
        }

        .carousel-multi-item.v-2.product-carousel *,
        .carousel-multi-item.v-2.product-carousel ::after,
        .carousel-multi-item.v-2.product-carousel ::before {
            -webkit-box-sizing: content-box;
            box-sizing: content-box;
        }

        .fuchsia-rose-text {
            color: #db0075;
        }

        .aqua-sky-text {
            color: #5cc6c3;
        }

        .mimosa-text {
            color: #F0C05A;
        }

        .list-inline-item .fas,
        .list-inline-item .far {
            font-size: .8rem;
        }

        .chili-pepper-text {
            color: #9B1B30;
        }

        .carousel-multi-item .controls-top .btn-floating {
            background: #F8CDCD;
        }

        .carousel-multi-item .carousel-indicators li {
            height: .75rem;
            width: .75rem;
            max-width: .75rem;
            background-color: #5cc6c3;
        }

        .carousel-multi-item .carousel-indicators .active {
            height: 1rem;
            width: 1rem;
            max-width: 1rem;
            background-color: #5cc6c3;
        }

        .carousel-multi-item .carousel-indicators {
            margin-bottom: -1rem;
        }

    </style>
@endsection

@section('content')
    <div id="carouselExampleDark" class="carousel carousel-dark slide" data-bs-ride="carousel">
        <div class="carousel-indicators">
            <button type="button" data-bs-target="#carouselExampleDark" data-bs-slide-to="0" class="active"
                aria-current="true" aria-label="Slide 1"></button>
            <button type="button" data-bs-target="#carouselExampleDark" data-bs-slide-to="1" aria-label="Slide 2"></button>
            <button type="button" data-bs-target="#carouselExampleDark" data-bs-slide-to="2" aria-label="Slide 3"></button>
        </div>
        <div class="carousel-inner">
            <div class="carousel-item active" data-bs-interval="10000">
                <img src="https://via.placeholder.com/2000x800" class="d-block w-100" alt="...">
                <div class="carousel-caption d-none d-md-block">
                    <h5>First slide label</h5>
                    <p>Some representative placeholder content for the first slide.</p>
                </div>
            </div>
            <div class="carousel-item" data-bs-interval="2000">
                <img src="https://via.placeholder.com/2000x800" class="d-block w-100" alt="...">
                <div class="carousel-caption d-none d-md-block">
                    <h5>Second slide label</h5>
                    <p>Some representative placeholder content for the second slide.</p>
                </div>
            </div>

            <div class="carousel-item">
                <img src="https://via.placeholder.com/2000x800" class="d-block w-100" alt="...">
                <div class="carousel-caption d-none d-md-block">
                    <h5>Third slide label</h5>
                    <p>Some representative placeholder content for the third slide.</p>
                </div>
            </div>
        </div>
        <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleDark" data-bs-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Previous</span>
        </button>
        <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleDark" data-bs-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Next</span>
        </button>
    </div>
    <section>
        <div class="row py-4">
            <div class="text-center h2">
                <h2>Produtos em promoção</h2>
                <span class="text-muted"> sadsdasd asdasdasd asdasdasd asdadsadasdasdasd asdasdasdas dasdasdasd
                    asdasdasdas </span>
            </div>
        </div>


        <div class="row">
            @foreach (App\Models\Product::promocoes() as $product)
                <div class="col-lg-4 col-md-6 col-sm-10 border" style="background-color: #c4d6d6">
                    <div class="text-center" style="height: 250px">
                        <img src="{{ asset($product->image) }}" class="h-100">
                    </div>
                    <div class="text-center">
                        <span class="d-block fw-bold">{{ $product->name }}</span>
                        <span class="d-block">{{ $product->price }}</span>
                        <div>
                            <a href="#" class="btn btn-secondary  ">Visualizar</a>
                            <a href="#" class="btn btn-primary">Adicionar o carrinho</a>
                        </div>
                    </div>
                </div>
            @endforeach
        </div>
    </section>    

@endsection
