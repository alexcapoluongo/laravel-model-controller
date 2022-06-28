@extends('layouts.app')

@section('main_content') 
<main>
<div class="row">
@foreach ($movies as $item)
    <div class="card">
        <h1>Title: {{ $item->title }}</h1>
        <h2>Original title: {{ $item->original_title }}</h2>
        <p>Nationality: {{ $item->nationality }}</p>
        <p>Date: {{ $item->date }}</p>
        <p>Average Vote: {{ $item->vote }}</p>
    </div>
@endforeach
</div>
<main>
@endsection