@extends('layouts.app')



@section('main_content')

{{-- Blue Stripe --}}
<div class="blue-stripe">
    
    {{-- Single Product --}}
    <div class="card-container">
        <img src="{{ $current_comics['thumb'] }}" alt="{{ $current_comics['title'] }}">
    </div>
</div>

<div class="col-container">
    
    <div class="col-left">

        {{-- Title --}}
        <h1>
            {{ $current_comics['title'] }}
        </h1>

        {{-- Green Stripe --}}
        <div class="green-stripe">

            {{-- Price --}}
            <div class="price">
                <span class="light-green">
                    U.S. Price:
                </span>

                <span class="white">
                    {{ $current_comics['price'] }}
                </span>

                {{-- Available --}}
                <span class="available light-green">
                    available
                </span>
            </div>

            {{-- Check Availability --}}
            <div class="check-availability white">
                <span class="padding">
                    Check Availability 
                </span>

                {{-- Caret Down Icon --}}
                <i class="fa-solid fa-caret-down"></i>
            </div>
        </div>

        {{-- Description --}}
        <div class="description">
            {{ $current_comics['description'] }}
        </div>
    </div>
    
    <div class="col-right">
        <h5>
            advertisement
        </h5>

        <img src="{{ asset('../img/img-right.jpg') }}" alt="advertisement">
    </div>

</div>

{{-- Talent/Specs Section --}}
<section class="talent">
    <div class="col-container">

        {{-- Talent --}}
        <div class="col-left">
            
            <div class="artists-wrapper">
                
                {{-- Art by --}}
                <div class="art-by">
                    Art by:
                </div>
    
                {{-- Artist --}}
                <div class="artists">
                    @foreach ($current_comics['artists'] as $artist)
                        <span class="blue">
                            {{ $artist }}
                        </span>
                        @if(!$loop->last), @endif
                    @endforeach
                </div>

                {{-- Written by --}}
                <div class="written-by">
                    written by:
                </div>

                {{-- Writers --}}
                <div class="writers">
                    @foreach ($current_comics['writers'] as $writers)
                        <span class="blue">
                            {{ $writers }}
                        </span>
                        @if(!$loop->last), @endif
                    @endforeach
                </div>
            </div>
        </div>

        {{-- Specs --}}
        <div class="col-right">
            
            <div class="series">
                <span>
                    Series:
                </span>
                
                <span class="blue uppercase">
                    {{ $current_comics['series'] }}
                </span>
            </div>

            <div class="specs-price">
                <span>
                    U.S. Price:
                </span>
                
                <span>
                    {{ $current_comics['price'] }}
                </span>
            </div>

            <div class="sale">
                <span>
                    On Sale Date:
                </span>
                
                <span>
                    {{ $current_comics['sale_date'] }}
                </span>
            </div>
        </div>
    </div>
</section>



@endsection