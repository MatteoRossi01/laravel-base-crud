@extends('layouts.base')

@section('pageTitle', 'Inserisci il tuo fumetto!')

@section('content')
    <div class="container">
        <h1 class="text-success text-center">Compila il FORM!</h1>

        <form action="{{ route('comics.store') }}" method="POST">
            @csrf

            <div class="mb-3">
                <label for="title" class="form-label">Titolo</label>
                <input type="text" class="form-control" name="title" id="title" >
            </div>

            <div class="mb-3">
                <div class="form-floating">
                    <textarea class="form-control" placeholder="Inserisci la descrizione del fumetto" name="description" id="description"></textarea>
                    <label for="description">Descrizione</label>
                </div>
            </div>

            <div class="mb-3">
                <label for="thumb" class="form-label">Thumbnail</label>
                <input type="text" class="form-control" name="thumb" id="thumb">
            </div>

            <div class="mb-3">
                <label for="price" class="form-label">Prezzo</label>
                <input type="number" step=".01" class="form-control" name="price" id="price">
            </div>


            <div class="mb-3">
                <label for="series" class="form-label">Serie</label>
                <input type="text" class="form-control" name="series" id="series">
            </div>

            <div class="mb-3">
                <label for="sales_date" class="form-label">Data di uscita</label>
                <input type="date" class="form-control" name="sale_date" id="sales_date">
            </div>

            <div class="mb-3">
                <label for="type" class="form-label">Tipologia</label>
                <input type="text" class="form-control" name="type" id="type">
            </div>

            <div class="d-flex align-items-center ">
                <a class="btn btn-success text-white me-2" href="{{ route('comics.index') }}" role="button">Ritorna alla Home</a>
                <button type="submit" class="btn btn-primary text-white">Invia</button>
            </div>

        </form>

    </div>

@endsection