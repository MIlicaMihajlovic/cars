@extends('layouts.master')
    
@section('title')
    Cars
@endsection   

@section('content')
<ul>
                
    <li>{{ $car->title }}</li>
    <li>{{ $car->producer }}</li>
    <li>{{ $car->number_of_doors }}</li>

</ul>
@endsection

            {{-- <h1>{{$car->id}}</h1> --}}
    
