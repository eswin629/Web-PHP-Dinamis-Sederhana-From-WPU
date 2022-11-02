@extends('layouts.main')

@section('container')
    <h1 class="mb-5">Post Category:{{ $category }}</h1>
    @foreach ($post as $p)
    <article class="mb-5">
        <h2> <a href="/post/{{ $p->slug }}">{{ $p->title }}</a></h2>
        {{-- <h5>{{ $p["author"] }}</h5> --}}
        <p>{{ $p->excerpt }}</p>
    </article>
    @endforeach

@endsection