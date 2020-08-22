@extends('layouts.app')

@section('content')

    <section id="isla_products" class="mr-auto ml-5">
        <div class="isla-products-wrapper">
            <div class="row">
                <div class="col-xl-5 col-lg-5 col-md-5">
                    <img class="product-image" src="{{asset('/img/isla sulit.png')}}" alt="isla sulit">
                </div>
                <div class="col-xl-7 col-lg-7 col-md-7">
                    <div class="product-info">
                        <h5 class="product-title"><span>ISLA SULIT</span></h5>
                        <p class="product-description">
                            Product description Product description Product description Product description Product description Product description
                        </p>
                        <span class="product-start">STARTS AT <span class="product-price">P80</span></span>
                    </div>
                </div>
            </div>
        </div>
        <div class="isla-products-wrapper">
            <div class="row">
                <div class="col-xl-5 col-lg-5 col-md-5">
                    <img class="product-image" src="{{asset('img/hundred islands.png')}}" alt="">
                </div>
                <div class="col-xl-7 col-lg-7 col-md-7">
                    <div class="product-info">
                        <h5 class="product-title"><span>HUNDRED ISLANDS</span></h5>
                        <p class="product-description">
                            Product description Product description Product description Product description Product description Product description
                        </p>
                        <span class="product-start">STARTS AT <span class="product-price">P120</span></span>
                    </div>
                </div>
            </div>
        </div>
        
        <div class="isla-products-wrapper">
            <div class="row">
                <div class="col-xl-5 col-lg-5 col-md-5">
                    <img class="product-image" src="{{asset('img/sisig wrap.png')}}" alt="">
                </div>
                <div class="col-xl-7 col-lg-7 col-md-7">
                    <div class="product-info">
                        <h5 class="product-title"><span>SISIG WRAP</span></h5>
                        <p class="product-description">
                            Product description Product description Product description Product description Product description Product description
                        </p>
                        <span class="product-start">STARTS AT <span class="product-price">P70</span></span>
                    </div>
                </div>
            </div>
        </div>
    
    </section>

@endsection