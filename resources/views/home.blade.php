@extends('layout.main')

@section('content')

<div class="comics container">
    <ul>
        @foreach (getComics() as $comic)
        <li>
            <img src="{{ $comic->image}}" alt="{{ $comic->title}}" />
            <b>{{$comic->title}}</b>
        </li>
        @endforeach;
    </ul>
</div>

@endsection