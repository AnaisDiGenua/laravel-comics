@foreach ($comics as $comic)
    <div class="comic">
        <img src="{{$comic['thumb']}}" alt="{{$comic['series']}}">
        <h3>{{$comic['series']}}</h3>
</div>
@endforeach
