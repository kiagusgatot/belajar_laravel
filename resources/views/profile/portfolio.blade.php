@extends('layouts.app')

@section('content')

<h2>Portfolio</h2>

@foreach($projects as $project)

<h3>{{ $project['title'] }}</h3>
<p>{{ $project['tech'] }}</p>

@endforeach

@endsection