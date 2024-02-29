@extends('layouts.app')

@section('title', 'Short Links For You And Your Goals!')

@section('content')

    <p>Your short link for {{ substr($link->url, 0, 30) }}...</p>
    <input type="text" value="{{ url('/') . '/' . $link->short_code }}">

@endsection
