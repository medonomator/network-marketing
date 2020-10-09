@extends('layouts.admin') @section('content')

<h1>Notes</h1>
<a class="ui primary button" href="notes/create">Создать заметку</a>
<br />
<br />
<div class="notes">
    @foreach ($notes as $index=>$note)
    <div class="notes-item">
        <div class="left-block">
            <p>{{$index + 1}}</p>
        </div>
        <div class="middle-block">
            <textarea>{{$note->body}}</textarea>
        </div>
        <div class="right-block">
            <a class="ui green button" href="notes/update">Обновить</a>
            <a class="ui red button" href="notes/delete/{{$note->id}}">Удалить</a>
        </div>
    </div>

    @endforeach
</div>

@endsection
