@extends('layouts.base')
@section('pageTitle', 'ListaFumetti')

@section('content')

    <div class="container">
        <button class="btn btn-primary">
          <a href="{{ route('comics.create') }}" class="text-dark">Aggiungi un nuovo fumetto</a>
        </button>

        <table class="table table-striped table-hover">
            <thead>
              <tr>
                <th scope="col">ID</th>
                <th scope="col">Immagine</th>
                <th scope="col">Titolo</th>
                <th scope="col">Prezzo</th>
                <th scope="col">Serie</th>
                <th scope="col">Data uscita</th>
                <th scope="col">Tipologia</th>
                <th scope="col">Azioni</th>
              </tr>
            </thead>
            <tbody>
                @foreach ($comics as $comic )    
                <tr>
                    <th scope="row">{{ $comic->id }}</th>
                    <td><img src={{ $comic->thumb }} class="w-50" alt="img-{{ $comic->title }}"> </td>
                    <td>{{ $comic->title }}</td>
                    <td>{{ $comic->price }}</td>
                    <td>{{ $comic->series }}</td>
                    <td>{{ $comic->sale_date }}</td>
                    <td>{{ $comic->type }}</td>
                    <td>
                        <a class="btn btn-primary mt-5" href="{{route('comics.show', $comic->id)}}" role="button">Vedi</a>
                    </td>
                </tr>
                @endforeach
            </tbody>
          </table>
    </div>

@endsection