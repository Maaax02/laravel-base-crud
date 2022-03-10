@extends('welcome')
@section('content')
<div class="box">
    <ul>
        <h1>Comic #{{$comic->id}} Details</h1>
        <div class="list">
            <li>Titolo: {{$comic->title}}</li>
            <li>Decrizione: {{$comic->description}}</li>
            <li>Thumbnail: {{$comic->thumb}}</li>
            <li>Prezzo: {{$comic->price}}</li>
            <li>Series: {{$comic->series}}</li>
            <li>Date: {{$comic->saleDate}}</li>
            <li>Type: {{$comic->type}}</li>
        </div>

        <div class="d-flex justify-content-between">
          <button class="btn btn-danger" data-bs-toggle="modal" data-bs-target="#display-modal">Delete</button>
          <a href="{{route('comics.edit', $comic->id)}}" class="btn btn-secondary">Edit</a>
        </div>
        <form action="{{route('comics.destroy', $comic->id)}}" method="post">
            @csrf
            @method('delete')
            <div class="modal" tabindex="-1" id="display-modal">
                <div class="modal-dialog">
                  <div class="modal-content">
                    <div class="modal-header">
                      <h5 class="modal-title">Delete Comic?</h5>
                      <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <div class="modal-body">
                      <p>Are you sure to delete this comic?</p>
                    </div>
                    <div class="modal-footer">
                      <a class="btn btn-secondary" data-bs-dismiss="modal">Close</a>
                      <button type="submit" class="btn btn-primary" >Delete</button>
                    </div>
                  </div>
                </div>
              </div>
              
        </form>
    </ul>
</div>
@endsection
