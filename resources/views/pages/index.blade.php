@extends('layouts.app')

@section('content')

<header>
        
    <div id="islaSisigCarousel" class="carousel slide" data-ride="carousel">
        <div class="carousel-inner">
          <div class="carousel-item active">
            <img src="{{asset('/img/home page image.png')}}">
          </div>
        </div>
        <div>
          <ul class="carousel-indicators">
            <li data-target="#islaSisigCarousel" data-slide-to="0" class="active"></li>
            <li data-target="#islaSisigCarousel" data-slide-to="1"></li>
            <li data-target="#islaSisigCarousel" data-slide-to="2"></li>
          </ul>
        </div>
    </div>

</header>


@endsection