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

        <div class="green-stripe">

            <div class="price">
                <span class="light-green">
                    U.S. Price:
                </span>

                <span class="white">
                    {{ $current_comics['price'] }}
                </span>

                <span class="available light-green">
                    available
                </span>
            </div>

            <div class="check-availability white">
                <span>
                    check Availability 

                    <i class="fa-solid fa-caret-down"></i>
                </span>
            </div>
        </div>
    </div>
    
    <div class="col-right">
        <h5>
            advertisement
        </h5>
    </div>

</div>


@endsection