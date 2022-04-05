@extends('layouts.base')
@section('pageTitle')
    {{$comic->title}}
@endsection


@section('content')

    <header class="my_header d-flex align-items-center justify-content-center">
        <h3 class="font-monospace font-uppercase pt-2 ps-3">{{$comic->title}}</h3>
    </header>

    <main class="my_main pt-4">

        <div class="my_container">

            <div class="w-25">
                <img class="w-85" src="{{$comic->thumb}}" alt="">
            </div>

            <div class="d-flex flex-column">
                <span><strong>Series:</strong>  {{$comic->series}} </span>
                <span><strong>Price:</strong> {{$comic->price}} $ </span>
                <span><strong>Sale Date:</strong> {{ \Carbon\Carbon::parse($comic->sale_date)->format('M d Y')}}</span>
                <span><strong>Type:</strong> {{$comic->type}}</span>
            </div>

            <div>
                <a class="btn btn-primary mt-3 text-white" href="{{route('comics.index')}}" role="button">Home</a>
            </div>
        </div>
        
        <div class="my_box-description pt-2">
            <h3 class="fw-bold text-center text-uppercase">Description</h3>
            <p class="">{{$comic->description}}</p>
        </div>


    </main>
                    

@endsection