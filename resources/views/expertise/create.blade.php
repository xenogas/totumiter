@extends('layouts.master')

@section('content')
    <h1>Add a new Skill</h1>
    <hr>
    <form action="/about/expertise" method="post">
        {{ csrf_field() }}
        <div class="form-group">{{-- Cateogry --}}
            <label for='Languages' class="radio">
                <input type="radio" name="category" id='Languages' value="Languages">
                Languages
            </label>
            
            <label for='platforms' class="radio">
                <input type="radio" name="category" id='platforms' value="Platforms">
                Platforms
            </label>
            
            <label for="Concepts" class="radio">
                <input type="radio" name="category" id="Concepts" value="Concepts">
                Concepts
            </label>

            <label for="Software" class="radio">
                <input type="radio" name="category" id="Software" value="Software">
                Software
            </label>

            <label for="Frameworks" class="radio">
                <input type="radio" name="category" id="Frameworks" value="Frameworks">
                Frameworks
            </label>

            <label for="category" class="radio">
                <input type="radio" name="category" id="APIs" value="APIs">
                APIs
            </label>
            {{-- <label for="category">Category:</label>
            <select name="category" id="category">
                <option value="Language">Languages</option>
                <option value="Platform">Platforms</option>
                <option value="Concepts">Concepts</option>
                <option value="Software">Software</option>
                <option value="Frameworks">Frameworks</option>
                <option value="APIs">APIs</option>
            </select> --}}
        </div>
        <div class="form-group">{{-- Skill --}}
            <label for="skill">Skill</label>
            <input type="text" name="skill" id="skill">
        </div>
        <div class="form-group">
            <button type="submit" class="btn btn-primary">Submit</button>
        </div>
    </form>

    @include('layouts.errors')
@endsection