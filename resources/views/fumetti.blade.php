@extends('layouts.base')

@section('content')

    <ol>
        @foreach($fumetti as $fumetto)
            <li>
                <ul>
                    <li>{{ $fumetto->title }}</li>
                    <li>{{ $fumetto->author }}</li>
                    <li>{{ $fumetto->year }}</li>
                    <li>{{ $fumetto->review }}</li>
                    <li>{{ $fumetto->vote }}</li>
                </ul>
            </li>
            <br>
        @endforeach
    </ol>

@endsection