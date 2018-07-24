@extends('dashboard.app')

@section('content')
    <h1>Add news</h1>
    <hr>

    <form method="POST" enctype="multipart/form-data" action="{{ route('news.store') }}">
        {{csrf_field()}}
        <div class="form-group">
            <label for="title">Название статьи</label>
            <input type="text" name="title" class="form-control" id="title">
        </div>

            <input type="hidden" name="img" value="default.png" class="form-control" id="img">
            <input type="hidden" name="user_id" value="1" class="form-control" id="user_id">

        <div class="form-group">
            <label for="exampleFormControlInput1">Алиас</label>
            <input type="text" name="alias" class="form-control" id="alias">
        </div>
        <div class="form-group">
            <label for="exampleFormControlTextarea1">Вводный текст</label>
            <input type="text" name="introtext" class="form-control" id="introtext">
        </div>
        <div class="form-group">
            <label for="exampleFormControlTextarea1">Текст</label>
            <input type="text" name="text" class="form-control" id="text">
        </div>

        <buton type="submit" class="btn btn-primary btn-block float-right">Добавить</buton>
    </form>
@endsection
