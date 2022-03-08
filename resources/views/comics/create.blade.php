@extends('welcome')

@section('content')
<form action="{{ route('comics.store') }}" method="post" class="row g-3">
    @csrf
    
    <div class="mb-3">
        <label class="form-label">Title</label>
        <input type="text" class="form-control" name="title">
    </div>
    
    <div class="mb-3">
      <label class="form-label">Description</label>
      <textarea name="description" class="form-control" cols="30" rows="10"></textarea>
    </div>

    <div class="mb-3">
      <label class="form-label">Image</label>
      <input type="text" class="form-control" name="thumb">
    </div>

    <div class="mb-3">
      <label class="form-label">Price</label>
      <input type="text" class="form-control" name="price">
    </div>

    <div class="mb-3">
      <label class="form-label">Series</label>
      <input type="text" class="form-control" name="series">
    </div>

    <div class="mb-3">
      <label class="form-label">Sale Date</label>
      <input type="date" class="form-control" name="sale_date">
    </div>

    <div class="mb-3">
        <label class="form-label">Type</label>
        <input type="text" class="form-control" name="type">
      </div>


    <div class="d-flex">
      <button class="btn btn-outline-secondary me-3" type="reset">Indietro</button>
      <button class="btn btn-success" type="submit">Crea</button>
    </div>
  </form>
@endsection