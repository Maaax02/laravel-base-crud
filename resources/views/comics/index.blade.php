@include('welcome')
<div>
    <ul class="nav-ul">
        @foreach($dati as $fumetto)
        <div class="list">
            <li>Titolo: {{$fumetto->title}}</li>
            <li>Decrizione: {{$fumetto->description}}</li>
            <li>Thumbnail: {{$fumetto->thumb}}</li>
            <li>Prezzo: {{$fumetto->price}}</li>
            <li>Series: {{$fumetto->series}}</li>
            <li>Date: {{$fumetto->saleDate}}</li>
            <li class="mb-2">Type: {{$fumetto->type}}</li>
            <a href="{{route('comics.show', $fumetto->id)}}" class="btn btn-primary">Details</a>
            <a href="{{route('comics.edit', $fumetto->id)}}" class="btn btn-secondary">Edit</a>
        </div>
        @endforeach
    </ul>
</div>