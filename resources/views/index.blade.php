@extends('layouts.base')
@section('pageTitle', 'Home')

@section('content')
    <div class="alert alert-primary d-flex flex-row align-items-center justify-content-around" role="alert">
        Ciao!! clicca qui per scegliere il tuo fumetto
        <a class="btn btn-primary" href="{{route('comics.index')}}" role="button">Lista Fumetti</a>
    </div>
@endsection
