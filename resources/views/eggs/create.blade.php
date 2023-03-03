@extends('layouts.app')

@section('content')
<div class="container py-3">
    <div class="card">
        <div class="card-header d-flex justify-content-between align-items-center">
          <p class="m-0">Add data</p>
          <a href="{{ route('index') }}" class="btn btn-primary btn-sm">Indietro</a>
        </div>
        <div class="card-body">
          <form method="POST" action="{{ route('eggs.store') }}">
            @csrf
            <div class="row">
                <div class="col-12">
                    <div class="mb-3">
                        <label for="url" class="form-label">Immagini</label>
                        <input type="text" class="form-control" id="url" placeholder="Insert url" name="url" required value="{{old('url')}}">
                      </div>
                </div>
                <div class="col-3">
                    <div class="mb-3">
                        <label for="name" class="form-label">Nome dell'uovo</label>
                        <input type="text" class="form-control" id="name" placeholder="Nome dell'uovo" name="name" required value="{{old('name')}}">
                      </div>
                </div>
                <div class="col-3">
                    <div class="mb-3">
                        <label for="type" class="form-label">Tipo cioccolato</label>
                        <input type="text" class="form-control" id="type" name="type" required value="{{old('type')}}">
                      </div>
                </div>
                <div class="col-3">
                    <div class="mb-3">
                        <label for="content" class="form-label">Sorpresa</label>
                        <input type="text" class="form-control" id="content" name="content"  value="{{old('content')}}">
                      </div>
                </div>
                <div class="col-3">
                    <div class="mb-3">
                        <label for="color" class="form-label">Colore</label>
                        <input type="text" class="form-control" id="color" name="color" required value="{{old('color')}}">
                      </div>
                </div>
                <div class="col-6">
                    <div class="mb-3">
                        <label for="size" class="form-label">Dimensioni</label>
                        <input type="text" class="form-control" id="size" name="size" required value="{{old('size')}}">
                    </div>
                </div>
            <div class="d-flex justify-content-end">
                <button type="submit" class="btn btn-primary">Aggiungi</button>
            </div>
        </form>
    </div>
</div>
@endsection