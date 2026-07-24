@extends('layouts.app')

@section('title', 'Database Test')

@section('content')

<div class="container py-5">

    <h1>{{ $profile->name }}</h1>
    <h4>{{ $profile->title }}</h4>

    <hr>

    <h2>Expertise</h2>

    @foreach($expertises as $expertise)
        <p>
            <strong>{{ $expertise->title }}</strong><br>
            {{ $expertise->description }}
        </p>
    @endforeach

    <hr>

    <h2>Skills</h2>

    @foreach($skills as $skill)
        <p>{{ $skill->name }} - {{ $skill->percentage }}%</p>
    @endforeach

    <hr>

    <h2>Experience</h2>

    @foreach($experiences as $experience)
        <p>
            <strong>{{ $experience->position }}</strong><br>
            {{ $experience->company }}
        </p>
    @endforeach

    <hr>

    <h2>Education</h2>

    @foreach($educations as $education)
        <p>
            <strong>{{ $education->school }}</strong><br>
            {{ $education->degree }}
        </p>
    @endforeach

    <hr>

    <h2>Social Links</h2>

    @foreach($socialLinks as $link)
        <p>{{ $link->platform }}</p>
    @endforeach

</div>

@endsection
