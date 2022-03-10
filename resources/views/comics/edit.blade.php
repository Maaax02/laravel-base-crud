@extends('welcome')
@section('content')
    <h1 class="edit">Modifica Fumetto</h1>
    
  <form action="{{ route('comics.update', $comic->id) }}" method="post" class="row g-3">
    @csrf
    @method('put')

    <div class="row">
      <div class="col">
        <div class="mb-3">
          <label class="form-label">Title</label>
          <input type="text" class="form-control" name="title" value="{{ $comic->title }}">
        </div>
      </div>
      <div class="col">
        <div class="mb-3">
          <label class="form-label">Type</label>
          <input type="text" class="form-control" name="type" value="{{ $comic->type }}">
        </div>
      </div>
    </div>

    <div class="row">
      <div class="col">
        <div class="mb-3">
          <label class="form-label">Thumbnail</label>
          <input type="text" class="form-control" name="thumb" value="{{ $comic->region }}">
        </div>
      </div>
      <div class="col">
        <div class="mb-3">
          <label class="form-label">Price</label>
          <input type="text" class="form-control" name="price" value="{{ $comic->price }}">
        </div>
      </div>
    </div>

    <div class="row">
      <div class="col">
        <div class="mb-3">
          <label class="form-label">Series</label>
          <input type="text" class="form-control" name="series" value="{{ $comic->series }}">
        </div>
      </div>
      <div class="col">
        <div class="mb-3">
          <label class="form-label">Sale Date</label>
          <input type="number" class="form-control" name="saleDate" value="{{ $comic->saleDate }}">
        </div>
      </div>
    </div>

    <div class="row">
      <div class="col">
        <div class="mb-3">
          <label class="form-label">description</label>
          <textarea name="description" class="form-control" cols="30" rows="10">{{ $comic->description }}</textarea>
        </div>
      </div>
    </div>

    <div class="row">
      <div class="col">
        <div class="form-check mb-3">
          <input class="form-check-input" type="checkbox" value="1" id="flexCheckDefault" name="active"
            {{ $comic->active ? 'checked' : '' }}>
          <label class="form-check-label" for="flexCheckDefault">
            Attiva
          </label>
        </div>
      </div>
    </div>


    <div class="d-flex">
      <button class="btn btn-outline-secondary me-3" type="reset">Indietro</button>
      <button class="btn btn-success" type="submit">Edit</button>
    </div>
  </form>
@endsection