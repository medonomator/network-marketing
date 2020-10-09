@extends('layouts.app') @section('content')

<form id="login-form" class="modal">...</form>

<!-- <div class="top-shuffle">
                <a class="shuffle">
                    Перетасовать
                </a>
            </div> -->
<section class="notes grid">
    <div class="notes">
        @foreach ($notes as $index=>$note)
        <div class="notes-element grid-item">
            <p>{{$note->body}}</p>
            <div class="arrow-icon"><i class="fa fa-arrow-right" aria-hidden="true"></i></div>
        </div>
        @endforeach
    </div>
</section>

<!-- <div class="fa-down">
    <i class="fa fa-arrow-down" aria-hidden="true"></i>
</div> -->

@endsection
