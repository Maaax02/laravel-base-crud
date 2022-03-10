@include('welcome')
<div>
    <ul>
        @foreach($dati as $fumetto)
        <div class="list">
            <li>Titolo: {{$fumetto->title}}</li>
            <li>Decrizione: {{$fumetto->description}}</li>
            <li>Thumbnail: {{$fumetto->thumb}}</li>
            <li>Prezzo: {{$fumetto->price}}</li>
            <li>Series: {{$fumetto->series}}</li>
            <li>Date: {{$fumetto->saleDate}}</li>
            <li>Type: {{$fumetto->type}}</li>
            <a href="{{route('comics.show', $fumetto->id)}}">details</a>
            <a href="{{route('comics.edit', $fumetto->id)}}">edit</a>
        </div>
        @endforeach
    </ul>
</div>