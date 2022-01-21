@extends('layouts.main')

@section('content')
    <div class="container">
        <div class="row">
            @foreach ($movies as $movie)
            <div class="col-4 movie-card">
                <ul>
                    <li>
                        <strong>Titolo del film:</strong> {{ $movie->title }}
                    </li>
                    <li>
                        <strong>Titolo in lingua originale:</strong> {{ $movie->original_title }}
                    </li>
                    <li>
                        <strong>Nazionalità del film:</strong> {{ $movie->nationality }}
                    </li>
                    <li>
                        <strong>Data di pubblicazione:</strong> {{ $movie->date }}
                    </li>
                    <li>
                        <strong>Voto del film:</strong> {{ $movie->vote }}
                    </li>
                </ul>
            </div>
            @endforeach
        </div>
    </div>
@endsection