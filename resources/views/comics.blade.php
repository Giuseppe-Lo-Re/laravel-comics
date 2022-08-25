@extends('layouts.app')

@section('main_content')

{{-- Comics Card Section --}}
<section>
    <div class="container">

        <!-- Title -->
        <div class="title position">
            current series
        </div>
    
        <!-- Products List -->
        <div class="products-list">
            @foreach ($comics_series_array as $comics_item)
            {{-- {{dd($comics_item)}} --}}
            <div class="product-card-container">
                <div class="product-card">
        
                    <!-- Image -->
                    <div class="img-wrapper">
                        <img src="{{$comics_item['thumb']}}" alt="{{$comics_item['title']}}">
                    </div>
        
                    <!-- Title -->
                    <div class="product-title">
                        {{$comics_item['title']}}
                    </div>
                </div>
            </div>
            @endforeach
        </div>
    
        <!-- Load More -->
        <div class="wrapper">
            <div class="title padding-cursor">
                load more
            </div>
        </div>
    </div>
</section>

{{-- Links Section --}}
<section class="links">
    <div class="container">
        <ul>

            <!-- Links -->
            <li>
                <a href="#">

                    <!-- link Image -->
                    
                    <img src="{{ asset('../img/buy-comics-digital-comics.png') }}" alt="buy-comics-digital-comics">
                    
                    <!-- link Info -->
                    <div class="text">
                        digital comics
                    </div>    
                </a>

                <a href="#">
                    
                    <!-- link Image -->
                    <img src="{{ asset('../img/buy-comics-merchandise.png') }}" alt="buy-comics-merchandise">
                    
                    <!-- link Info -->
                    <div class="text">
                        dc merchandise
                    </div>    
                </a>

                <a href="#">
                    
                    <!-- link Image -->
                    <img src="{{ asset('../img/buy-comics-subscriptions.png') }}" alt="buy-comics-subscriptions">
                    
                    <!-- link Info -->
                    <div class="text">
                        subscription
                    </div>    
                </a>

                <a href="#">
                    
                    <!-- link Image -->
                    <img src="{{ asset('../img/buy-comics-shop-locator.png') }}" alt="buy-comics-shop-locator">
                    
                    <!-- link Info -->
                    <div class="text">
                        comic shop locator
                    </div>    
                </a>

                <a href="#">

                    <!-- link Image -->
                    <img src="{{ asset('../img/buy-dc-power-visa.svg') }}" alt="buy-dc-power-visa">
                    
                    <!-- link Info -->
                    <div class="text">
                        dc power visa
                    </div>    
                </a>
            </li>
        </ul>
    </div>
</section>
@endsection