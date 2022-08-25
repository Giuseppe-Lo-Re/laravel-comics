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
        
        <img src="{{ asset('../img/adv.jpg') }}" alt="advertisement">
    </div>

</div>


@endsection