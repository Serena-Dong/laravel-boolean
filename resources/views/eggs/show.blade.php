@extends('layouts.app')

@section('content')
<div class="border border-primary-subtle my-3 p-5 d-flex align-items-center justify-content-center">
    <figcaption class="my-3 col-3">
        <img src="{{ $eggs->url }}" alt="{{ $eggs->name }}" class="" width="250">
    </figcaption>
    
    <div>
        <h1 class="text-warning-emphasis">{{ $eggs->name }}</h1>
        <h4>Specifiche:</h4>
                <p class="m-0"><strong>Tipo di cioccolata </strong> {{ $eggs->type }}</p>
                <p class="m-0"><strong class="">Sorpresina </strong> {{ $eggs->content }}</p>
                <p class="m-0"><strong class="">Colore </strong> {{ $eggs->color }}</p>
                <p class="m-0"><strong>Dimensioni </strong> {{ $eggs->size }}</p>
    </div>
</div>
<div class="d-flex justify-content-end">

    <a href="{{ route('eggs.edit', $eggs['id']) }}" class="btn btn-success me-2">Modifica</a> 
    <form action="{{ route('eggs.destroy', $eggs['id']) }}" method="POST">
        @csrf
        @method('DELETE')
        <button type="submit" class="btn btn-danger me-2">Elimina</button>
    </form>
    <a href="{{route('index')}}" class="btn btn-secondary">Inditro</a> 
</div>
@endsection