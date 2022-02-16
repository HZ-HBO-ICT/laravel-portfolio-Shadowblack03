@extends('layout')

@section('show')
    <div id="content">
        <div class="title">
            <h2>{{ $article->title }}</h2>
        </div>
        <p>
            <img
                src="/images/banner.jpg"
                alt=""
                class="image image-full"
            />
        </p>

        {{ $article->body }}

    </div>
@endsection

