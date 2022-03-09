@extends('partials.navbar')

@section('content')
    <h1>Modifica Fumetto</h1>
    
  <form action="{{ route('comics.update', $branch->id) }}" method="post" class="row g-3">
    @csrf
    @method('put')

    <div class="row">
      <div class="col">
        <div class="mb-3">
          <label class="form-label">Indirizzo</label>
          <input type="text" class="form-control" name="address" value="{{ $branch->address }}">
        </div>
      </div>
      <div class="col">
        <div class="mb-3">
          <label class="form-label">Città</label>
          <input type="text" class="form-control" name="city" value="{{ $branch->city }}">
        </div>
      </div>
    </div>

    <div class="row">
      <div class="col">
        <div class="mb-3">
          <label class="form-label">Regione</label>
          <input type="text" class="form-control" name="region" value="{{ $branch->region }}">
        </div>
      </div>
      <div class="col">
        <div class="mb-3">
          <label class="form-label">Provincia</label>
          <input type="text" class="form-control" name="province" value="{{ $branch->province }}">
        </div>
      </div>
    </div>

    <div class="row">
      <div class="col">
        <div class="mb-3">
          <label class="form-label">Paese</label>
          <input type="text" class="form-control" name="country" value="{{ $branch->country }}">
        </div>
      </div>
      <div class="col">
        <div class="mb-3">
          <label class="form-label">Metri quadri</label>
          <input type="number" class="form-control" name="squareMeters" value="{{ $branch->squareMeters }}">
        </div>
      </div>
    </div>

    <div class="row">
      <div class="col">
        <div class="mb-3">
          <label class="form-label">Descrizione</label>
          <textarea name="description" class="form-control" cols="30" rows="10">{{ $branch->description }}</textarea>
        </div>
      </div>
    </div>

    <div class="row">
      <div class="col">
        <div class="form-check mb-3">
          <input class="form-check-input" type="checkbox" value="1" id="flexCheckDefault" name="active"
            {{ $branch->active ? 'checked' : '' }}>
          <label class="form-check-label" for="flexCheckDefault">
            Attiva
          </label>
        </div>
      </div>
    </div>


    <div class="d-flex">
      <button class="btn btn-outline-secondary me-3" type="reset">Indietro</button>
      <button class="btn btn-success" type="submit">Crea</button>
    </div>
  </form>
@endsection