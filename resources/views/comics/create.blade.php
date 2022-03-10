@extends('welcome')

@section('content')
@if ($errors->any())
{{-- @dump($errors->all()) --}}
<div class="alert alert-danger">
  <ul class="errors-list">
    @foreach ($errors->all() as $error)
      <li>{{ $error }}</li>
    @endforeach
  </ul>
</div>
@endif
<form action="{{ route('comics.store') }}" method="post" class="row g-3">
    @csrf
    
    <div class="mb-3">
        <label class="form-label">Title</label>
        <input type="text" class="form-control @error('title')
            is-invalid
        @enderror" name="title">
    </div>
    
    <div class="mb-3">
      <label class="form-label">Description</label>
      <textarea name="description" class="form-control @error('description')
      is-invalid
      @enderror" cols="30" rows="10"></textarea>
    </div>

    <div class="mb-3">
      <label class="form-label">Image</label>
      <input type="text" class="form-control @error('thumb')
      is-invalid
      @enderror" name="thumb">
    </div>

    <div class="mb-3">
      <label class="form-label">Price</label>
      <input type="text" class="form-control @error('price')
      is-invalid
      @enderror" name="price">
    </div>

    <div class="mb-3">
      <label class="form-label">Series</label>
      <input type="text" class="form-control @error('series')
      is-invalid
      @enderror" name="series">
    </div>

    <div class="mb-3">
      <label class="form-label">Sale Date</label>
      <input type="date" class="form-control @error('saleDate')
      is-invalid
      @enderror" name="sale_date">
    </div>

    <div class="mb-3">
        <label class="form-label">Type</label>
        <input type="text" class="form-control @error('type')
        is-invalid
        @enderror" name="type">
      </div>


    <div class="d-flex">
      <button class="btn btn-outline-secondary me-3" type="reset">Indietro</button>
      <button class="btn btn-success" type="submit">Crea</button>
    </div>
  </form>
@endsection