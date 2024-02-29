@extends('layouts.app')

@section('title', 'Short Links For You And Your Goals!')

@section('content')

    <p>Try to short your link:</p>
    <div class="form-block">
        <form action="{{ route('links.create') }}" method="post">
            @csrf
            <input type="url" name="url" id="url" placeholder="Your url...">
            <button type="submit">Create</button>
        </form>
    </div>

@endsection
