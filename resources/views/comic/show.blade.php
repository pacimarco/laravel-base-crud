@extends('layout.app')

@section('title','singolo elemento')

@section('content')

<div class="container">
    <h1>DETTAGLI: {{$uscita->title}}</h1>
    <img src="{{$uscita->thumb}}" alt="{{$uscita->title}}"/>
    <div>DESCRIPTION: {{$uscita->description}}</div>
    <div>PRICE: {{$uscita->price}}</div>
    <div>SALE DATE: {{$uscita->sale_date}}</div>
    <div>SERIES: {{$uscita->series}}</div>
    <div>TYPE: {{$uscita->type}}</div>

    <a class="btn btn-primary" href="{{route('comics.index')}}">Torna alla lista</a>

</div>

@endsection