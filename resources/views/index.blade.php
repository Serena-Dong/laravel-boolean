
@extends('layouts.app')

@section('content')
<div class="d-flex justify-content-start flex-wrap p-5">
    @foreach($eggs as $egg)
    <div class="card m-1" style="width: 18rem;">
        <div class="card-body">
        <img src="{{ $egg['url'] }}" class="img text-center">
          <h5 class="card-title mt-3">{{$egg['name']}}</h5>
          <h6 class="card-text">{{$egg['type']}}</h6>
          <a href="{{route('eggs.show', $egg['id'])}}" class="btn btn-primary mt-3">Vedi</a>
        </div>
    </div>    
      @endforeach
  </div>
  <div class="d-flex justify-content-center mb-5">
    <a href="{{route('eggs.create')}}" class="btn btn-success">Aggiungi</a>
  </div>
  @endsection