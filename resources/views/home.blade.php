{{-- questa view estende il file main.blade.php che è dentro la cartella view/layouts --}}
@extends('layouts.main')


@section('content')
<div class="container my-5">
    <h1>Lista film</h1>
    <table class="table">
        <thead>
            <tr>
                <th scope="col">Id</th>
                <th scope="col">Titolo</th>
                <th scope="col">Titolo originale</th>
                <th scope="col">Anno di uscita</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($movies as $movie)
            <tr>
                <th>{{ $movie->id }}</th>
                <td>{{ $movie->title }}</td>
                <td>{{ $movie->original_title }}</td>
                <td>{{ $movie->date }}</td>
            </tr>

            @endforeach
        </tbody>
    </table>
</div>

@endsection


@section('titlePage')
home
@endsection