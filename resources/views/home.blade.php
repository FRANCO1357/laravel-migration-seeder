@extends('layouts.main')

@section('main-content')

@foreach ($trains as $train)
        <div class="card">
            <p>{{$train->id}}</p>
            <h2>{{$train->number}}</h2>
            <p>{{$train->city}}</p>
            <p>{{$train->color}}</p>
        </div>
    @endforeach
    
@endsection