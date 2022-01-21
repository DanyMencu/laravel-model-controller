@extends('layouts.main')

@section('content')
    <div class="container">
        <div class="row">
            {{-- Foreach --}}
            <div class="col-4">
                <ul>
                    <li>
                        <strong>Titolo del film:</strong>
                    </li>
                    <li>
                        <strong>Titolo in lingua originale:</strong>
                    </li>
                    <li>
                        <strong>Nazionalità del film:</strong>
                    </li>
                    <li>
                        <strong>Data di pubblicazione:</strong>
                    </li>
                    <li>
                        <strong>Voto del film:</strong>
                    </li>
                </ul>
            </div>
        </div>
    </div>
@endsection