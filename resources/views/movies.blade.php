@extends('layouts.app')

@section('main_content') 
@foreach ($movies as $item)
<h1>{{ $item->title }}</h1>
<h2>{{ $item->original_title }}</h2>
<h2>{{ $item->nationality }}</h2>
<h2>{{ $item->date }}</h2>
<h2>{{ $item->vote }}</h2>
@endforeach
@endsection