@extends('layouts.app')

@section('content')

<h2>About Me</h2>

<p>Education: {{ $about['education'] }}</p>

<h3>Hobby</h3>

@foreach($about['hobby'] as $hobby)
<p>{{ $hobby }}</p>
@endforeach

@endsection