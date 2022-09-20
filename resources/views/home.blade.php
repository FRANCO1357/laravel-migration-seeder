@extends('layouts.main')

@section('main-content')

@foreach ($trains as $train)
        <div class="card">
            <p>{{$train->id}}</p>
            <h2>{{$train->train_code}}</h2>
            <p>{{$train->company}}</p>
            <p>{{$train->start_station}}</p>
            <p>{{$train->end_station}}</p>
            <p>{{$train->start_time}}</p>
            <p>{{$train->end_time}}</p>
            <p>{{$train->carriages_number}}</p>
            <p>{{$train->in_time}}</p>
            <p>{{$train->delay}}</p>
        </div>
    @endforeach
    
@endsection