<h1>Тустовый шаблон</h1>

@foreach($news as $item)

    <h2>{{$item->title}}</h2>
    <p>{{$item->introtext}}</p>
    <hr>
    @endforeach
