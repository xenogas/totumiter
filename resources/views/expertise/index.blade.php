@extends('layouts.master')

@section('content')
    @if(!$skills->isEmpty())
        we have skills
        <ul>
            @foreach($skills as $skill)
                <li>{{ $skill->category}} -- {{ $skill->skill }}</li>
            @endforeach
        </ul>
    @else
        <p>No skills, time to create some</p>
        @endif
    <a href="/about/expertise/create" class="btn btn-default">Add Skill</a>
@endsection
