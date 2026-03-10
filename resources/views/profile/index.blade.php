@extends('layouts.app')

@section('content')

<h2>{{ $profile['name'] }}</h2>
<p>{{ $profile['title'] }}</p>
<p>{{ $profile['bio'] }}</p>

<h3>Skills</h3>

@foreach($profile['skills'] as $skill)
<p>{{ $skill }}</p>
@endforeach

@endsection